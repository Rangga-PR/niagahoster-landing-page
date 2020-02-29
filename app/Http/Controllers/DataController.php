<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getPackage()
    {
        $data = [
            [
                "bestseller" => false,
                "package_name" => "Bayi",
                "price" => "Rp 19.900",
                "discounted_price" => "Rp 14.900",
                "registered_users" => "938",
                "features" => [
                    "<b>0.5X RESOURCE POWER</b>",
                    "<b>500 MB</b> Disk Space",
                    "<b>Unlimited</b> Bandwidth",
                    "<b>Unlimited</b> Databases",
                    "<b>1</b> Domain",
                    "<b>Instant</b> Backup",
                    "<b>Unlimited SSL</b> Gratis Selamanya"
                ]
            ],
            [
                "bestseller" => false,
                "package_name" => "Pelajar",
                "price" => "Rp 46.900",
                "discounted_price" => "Rp 23.450",
                "registered_users" => "4.168",
                "features" => [
                    "<b>1X RESOURCE POWER</b>",
                    "<b>Unlimited</b> Disk Space",
                    "<b>Unlimited</b> Bandwidth",
                    "<b>Unlimited</b> POP3 Email",
                    "<b>Unlimited</b> Databases",
                    "<b>10</b> Addon Domains",
                    "<b>Instant</b> Backup",
                    "<b>Domain Gratis</b> Selamanya",
                    "<b>Unlimited SSL</b> Gratis Selamanya"
                ]
            ],
            [
                "bestseller" => true,
                "package_name" => "Personal",
                "price" => "Rp 58.900",
                "discounted_price" => "Rp 38.900",
                "registered_users" => "10.017",
                "features" => [
                    "<b>2X RESOURCE POWER</b>",
                    "<b>Unlimited</b> Disk Space",
                    "<b>Unlimited</b> Bandwidth",
                    "<b>Unlimited</b> POP3 Email",
                    "<b>Unlimited</b> Databases",
                    "<b>Unlimited</b> Addon Domains",
                    "<b>Instant</b> Backup",
                    "<b>Domain Gratis</b> Selamanya",
                    "<b>Unlimited SSL</b> Gratis Selamanya",
                    "<b>Private</b> Name Server",
                    "<b>SpamAssasin</b> Mail Protection"
                ]
            ],
            [
                "bestseller" => false,
                "discount" => "40%",
                "package_name" => "Bisnis",
                "price" => "Rp 109.900",
                "discounted_price" => "Rp 65.900",
                "registered_users" => "3.552",
                "features" => [
                    "<b>3X RESOURCE POWER</b>",
                    "<b>Unlimited</b> Disk Space",
                    "<b>Unlimited</b> Bandwidth",
                    "<b>Unlimited</b> POP3 Email",
                    "<b>Unlimited</b> Databases",
                    "<b>Unlimited</b> Addon Domains",
                    "<b>Magic Auto</b> Backup Restore",
                    "<b>Domain Gratis</b> Selamanya",
                    "<b>Unlimited SSL</b> Gratis Selamanya",
                    "<b>Private</b> Name Server",
                    "<b>Prioritas</b> Layanan Support",
                    "*****",
                    "<b>SpamExpert</b> Pro Mail Protection"
                ]
            ]
        ];

        return response()->json($data);
    }

    public function getModule()
    {
        $data = [
            "IcePhp",
            "apc",
            "apcu",
            "apm",
            "ares",
            "bcmath",
            "bcompiler",
            "big_int",
            "bigset",
            "bloomy",
            "bz2_filter",
            "clamav",
            "coin_acceptor",
            "crack",
            "dba",
            "http",
            "huffman",
            "idn",
            "igbinary",
            "imagick",
            "imap",
            "inclued",
            "inotify",
            "interbase",
            "intl",
            "ioncube_loader",
            "ioncube_loader_4",
            "jsmin",
            "json",
            "Idap",
            "nd_pdo_mysql",
            "oauth",
            "oci8",
            "odbc",
            "opcache",
            "pdf",
            "pdo",
            "pdo_dblib",
            "pdo_firebird",
            "pdo_mysql",
            "pdo_odbc",
            "pdo_pgsql",
            "pdo_sqlite",
            "pgsql",
            "phalcon",
            "stats",
            "stem",
            "stomp",
            "suhousin",
            "sybase_ct",
            "sysvmsg",
            "sysvsem",
            "sysvshm",
            "tidy",
            "timezonedb",
            "trader",
            "translit",
            "uploadprogress",
            "uri_template",
            "uuid"
        ];

        return response()->json($data);
    }
}
