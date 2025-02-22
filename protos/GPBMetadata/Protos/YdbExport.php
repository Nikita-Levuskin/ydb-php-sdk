<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_export.proto

namespace GPBMetadata\Protos;

class YdbExport
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Protos\Annotations\Validation::initOnce();
        \GPBMetadata\Protos\YdbOperation::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
protos/ydb_export.proto
Ydb.Exportprotos/ydb_operation.protogoogle/protobuf/timestamp.proto"�
ExportProgress"�
Progress
PROGRESS_UNSPECIFIED 
PROGRESS_PREPARING
PROGRESS_TRANSFER_DATA
PROGRESS_DONE
PROGRESS_CANCELLATION
PROGRESS_CANCELLED"�
ExportItemProgress
parts_total (
parts_completed (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"�
ExportToYtSettings
host (	B��*
port (
token (	B��*:
items (2#.Ydb.Export.ExportToYtSettings.ItemB��*(
description (	B��*�
number_of_retries (
use_type_v3 (A
Item
source_path (	B��*
destination_path (	B��*"
ExportToYtResult"�
ExportToYtMetadata0
settings (2.Ydb.Export.ExportToYtSettings5
progress (2#.Ydb.Export.ExportProgress.Progress6
items_progress (2.Ydb.Export.ExportItemProgress"�
ExportToYtRequest9
operation_params (2.Ydb.Operations.OperationParams6
settings (2.Ydb.Export.ExportToYtSettingsB��*"B
ExportToYtResponse,
	operation (2.Ydb.Operations.Operation"�
ExportToS3Settings
endpoint (	B��*5
scheme (2%.Ydb.Export.ExportToS3Settings.Scheme
bucket (	B��*

access_key (	B��*

secret_key (	B��*:
items (2#.Ydb.Export.ExportToS3Settings.ItemB��*(
description (	B��*�
number_of_retries (B
storage_class	 (2+.Ydb.Export.ExportToS3Settings.StorageClass
compression
 (	
region (	C
Item
source_path (	B��* 
destination_prefix (	B��*".
Scheme
UNSPECIFIED 
HTTP	
HTTPS"�
StorageClass
STORAGE_CLASS_UNSPECIFIED 
STANDARD
REDUCED_REDUNDANCY
STANDARD_IA

ONEZONE_IA
INTELLIGENT_TIERING
GLACIER
DEEP_ARCHIVE
OUTPOSTS"
ExportToS3Result"�
ExportToS3Metadata0
settings (2.Ydb.Export.ExportToS3Settings5
progress (2#.Ydb.Export.ExportProgress.Progress6
items_progress (2.Ydb.Export.ExportItemProgress"�
ExportToS3Request9
operation_params (2.Ydb.Operations.OperationParams6
settings (2.Ydb.Export.ExportToS3SettingsB��*"B
ExportToS3Response,
	operation (2.Ydb.Operations.OperationBO
tech.ydb.exportZ9github.com/ydb-platform/ydb-go-genproto/protos/Ydb_Export�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

