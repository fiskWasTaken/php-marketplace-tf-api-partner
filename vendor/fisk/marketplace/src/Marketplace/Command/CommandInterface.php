<?php

namespace Marketplace\Command;


interface CommandInterface {
    public function getRequestMethod(): string;

    public function getInterface(): string;

    public function getMethod(): string;

    public function getVersion(): string;

    public function getParams(): array;
}