<?php

namespace Spatie\Async\Process;

interface Runnable
{
    public function getId(): int;

    public function getPid(): int;

    public function start();

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function then(callable $callback);

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function catch(callable $callback);

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function timeout(callable $callback);

    public function stop();

    public function getOutput();

    public function getErrorOutput();

    public function triggerSuccess();

    public function triggerError();

    public function triggerTimeout();

    public function getCurrentExecutionTime(): float;
}
