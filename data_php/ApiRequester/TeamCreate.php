<?php

class TeamCreate implements ApiRequesterI
{
    private HelloSignSDK\Api\TeamApi $api;

    public function __construct(HelloSignSDK\Configuration $config)
    {
        $this->api = new HelloSignSDK\Api\TeamApi(
            $config,
            new GuzzleHttp\Client(),
        );
    }

    public function run(
        array $parameters,
        array $data,
        array $files
    ): array {
        $obj = HelloSignSDK\Model\TeamCreateRequest::fromArray(
            $data,
        );

        return $this->api->teamCreateWithHttpInfo(
            $obj,
        );
    }
}
