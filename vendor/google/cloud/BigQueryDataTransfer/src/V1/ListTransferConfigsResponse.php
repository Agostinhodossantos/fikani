<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The returned list of pipelines in the project.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.ListTransferConfigsResponse</code>
 */
class ListTransferConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The stored pipeline transfer configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_configs = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $transfer_configs;
    /**
     * Output only. The next-pagination token. For multiple-page list results,
     * this token can be used as the
     * `ListTransferConfigsRequest.page_token`
     * to request the next page of list results.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig[]|\Google\Protobuf\Internal\RepeatedField $transfer_configs
     *           Output only. The stored pipeline transfer configurations.
     *     @type string $next_page_token
     *           Output only. The next-pagination token. For multiple-page list results,
     *           this token can be used as the
     *           `ListTransferConfigsRequest.page_token`
     *           to request the next page of list results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The stored pipeline transfer configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_configs = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransferConfigs()
    {
        return $this->transfer_configs;
    }

    /**
     * Output only. The stored pipeline transfer configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_configs = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransferConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig::class);
        $this->transfer_configs = $arr;

        return $this;
    }

    /**
     * Output only. The next-pagination token. For multiple-page list results,
     * this token can be used as the
     * `ListTransferConfigsRequest.page_token`
     * to request the next page of list results.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Output only. The next-pagination token. For multiple-page list results,
     * this token can be used as the
     * `ListTransferConfigsRequest.page_token`
     * to request the next page of list results.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

