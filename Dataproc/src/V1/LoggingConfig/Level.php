<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1\LoggingConfig;

/**
 * The Log4j level for job execution. When running an
 * [Apache Hive](http://hive.apache.org/) job, Cloud
 * Dataproc configures the Hive client to an equivalent verbosity level.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.LoggingConfig.Level</code>
 */
class Level
{
    /**
     * Level is unspecified. Use default level for log4j.
     *
     * Generated from protobuf enum <code>LEVEL_UNSPECIFIED = 0;</code>
     */
    const LEVEL_UNSPECIFIED = 0;
    /**
     * Use ALL level for log4j.
     *
     * Generated from protobuf enum <code>ALL = 1;</code>
     */
    const ALL = 1;
    /**
     * Use TRACE level for log4j.
     *
     * Generated from protobuf enum <code>TRACE = 2;</code>
     */
    const TRACE = 2;
    /**
     * Use DEBUG level for log4j.
     *
     * Generated from protobuf enum <code>DEBUG = 3;</code>
     */
    const DEBUG = 3;
    /**
     * Use INFO level for log4j.
     *
     * Generated from protobuf enum <code>INFO = 4;</code>
     */
    const INFO = 4;
    /**
     * Use WARN level for log4j.
     *
     * Generated from protobuf enum <code>WARN = 5;</code>
     */
    const WARN = 5;
    /**
     * Use ERROR level for log4j.
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;
    /**
     * Use FATAL level for log4j.
     *
     * Generated from protobuf enum <code>FATAL = 7;</code>
     */
    const FATAL = 7;
    /**
     * Turn off log4j.
     *
     * Generated from protobuf enum <code>OFF = 8;</code>
     */
    const OFF = 8;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Level::class, \Google\Cloud\Dataproc\V1\LoggingConfig_Level::class);
