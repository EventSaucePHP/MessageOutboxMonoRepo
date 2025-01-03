<?php

namespace EventSauce\MessageRepository\TestTooling;

use EventSauce\EventSourcing\Serialization\SerializablePayload;

/**
 * @codeCoverageIgnore
 */
final class DummyEvent implements SerializablePayload
{
    public function __construct(public string $value = 'example')
    {
    }

    /**
     * @return string[]
     */
    public function toPayload(): array
    {
        return ['value' => $this->value];
    }

    /**
     * @param array<string, string> $payload
     */
    public static function fromPayload(array $payload): static
    {
        return new self($payload['value']);
    }
}
