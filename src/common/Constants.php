<?php

# DO NOT MODIFY THESE CONSTANTS!

/**
 * @author Michal Prochazka
 * @author Jakub Mlcak
 */
final class Constants
{
    public static $PAKITI_VERSION = "3.1.1";
    public static $DB_VERSION = "20171026";
    public static $CONFIG_VERSION = "20171019";

    # GitHub
    public static $PAKITI_GITHUB = "https://github.com/CESNET/pakiti-server";

    public static $PAKITI_CONFIG_FILE = "/etc/pakiti/Config.php";
    public static $PAKITI_CONFIG_ENV = "PAKITI_CONFIG_FILE";

    public static $FEEDER_SYNCHRONOUS_MODE = 1;
    public static $FEEDER_ASYNCHRONOUS_MODE = 2;

    public static $RETURN_OK = "OK";
    public static $RETURN_ERROR = "ERROR";

    public static $DATE_FORMAT = "Y-m-d H:i:s";

    # Authorization modes
    public static $AUTHZ_MODE_NONE = "none";
    public static $AUTHZ_MODE_AUTOCREATE = "auto-create";
    public static $AUTHZ_MODE_IMPORT = "import";
    public static $AUTHZ_MODE_MANUAL = "manual";

    public static $NA = "N/A";

    public static $ENABLED = 1;
    public static $DISABLED = 0;

    # Where to put OS names which do not have any mapping
    public static $UNKNOWN_OS_NAMES_FILE = "/tmp/pakiti-unknownOses.txt";

    # Entries names from the report
    public static $REPORT_HOSTNAME = "host";
    public static $REPORT_IP = "ip";
    public static $REPORT_OS = "os";
    public static $REPORT_ARCH = "arch";
    public static $REPORT_KERNEL = "kernel";
    public static $REPORT_SITE = "site";
    public static $REPORT_TAG = "tag";
    public static $REPORT_VERSION = "version";
    public static $REPORT_REPORT = "report";
    public static $REPORT_PROXY = "proxy";
    public static $REPORT_TYPE = "type";
    public static $REPORT_PKGS = "pkgs";
    public static $REPORT_REPORTER_IP = "reporterIp";
    public static $REPORT_REPORTER_HOSTNAME = "reporterHostname";
    public static $REPORT_TIMESTAMP = "timestamp";
    public static $REPORT_LAST_HEADER_HASH = "lastReportHeaderHash";
    public static $REPORT_LAST_PKGS_HASH = "lastReportPkgsHash";

    # Additional information sent by the client
    public static $PROTOCOL_PROCESSING_MODE = "mode"; /* should obsolete the 'report' entry above */
    public static $PROTOCOL_VERSION = "protocol";

    # What the server has to do with the report (the mode of processing)
    public static $STORE_ONLY = "store-only";
    public static $STORE_AND_REPORT = "store-and-report";
    public static $REPORT_ONLY = "report-only";

    # Is the reporting host a proxy?
    public static $HOST_IS_PROXY = 1;
    public static $HOST_IS_NOT_PROXY = 0;
    public static $PROXY_AUTHN_MODE_HOSTNAME = 'hostname';
    public static $PROXY_AUTHN_MODE_IP = 'ip';
    public static $PROXY_AUTHN_MODE_x509 = 'x509';

    # SSL related variables
    public static $SSL_CLIENT_SUBJECT = 'SSL_CLIENT_S_DN';

    # Type of the packager system (dpkg/rpm)
    public static $PACKAGER_SYSTEM_RPM = 'rpm';
    public static $PACKAGER_SYSTEM_DPKG = 'dpkg';

    # Does the host sending also its own repositories definitions?
    public static $OWN_REPOSITORIES_DEF = 1;

    # Mime type of encrypted report
    public static $MIME_TYPE_ENCRYPTED_REPORT = "application/octet-stream";
}
