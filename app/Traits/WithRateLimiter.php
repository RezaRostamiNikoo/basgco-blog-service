<?php


namespace App\Traits;


use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Support\Facades\RateLimiter;


trait WithRateLimiter
{
    protected function getRateLimitKey($method)
    {
        if (!$method) $method = debug_backtrace()[1]['function'];

        return static::class . '|' . $method . '|' . request()->ip();
    }

    protected function hitRateLimiter($method = null, $decaySeconds = 60)
    {
        if (! $method) $method = debug_backtrace()[1]['function'];

        $key = $this->getRateLimitKey($method);

        RateLimiter::hit($key, $decaySeconds);
    }
    protected function clearRateLimiter($method = null)
    {
        if (! $method) $method = debug_backtrace()[1]['function'];

        $key = $this->getRateLimitKey($method);

        RateLimiter::clear($key);
    }
    protected function rateLimit($maxAttempts, $decaySeconds = 60, $method = null)
    {
        if (! $method) $method = debug_backtrace()[1]['function'];

        $key = $this->getRateLimitKey($method);

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {

            $component = static::class;
            $ip = request()->ip();
            $secondsUntilAvailable = RateLimiter::availableIn($key);

            throw new ThrottleRequestsException("تعداد تلاش های غیر مجاز");
        }

        $this->hitRateLimiter($method, $decaySeconds);
    }
}
