<?php 
$valid_ip_ranges = array(
    '61.120.150.128-61.120.150.151',
    '62.17.146.128-62.17.146.191',
    '63.82.23.192-63.82.23.255',
    '142.176.79.168-142.176.79.175',
    '204.14.232.*',
    '204.14.233.*',
    '204.14.234.*',
    '204.14.235.*',
    '204.14.236.*',
    '204.14.237.*',
    '204.14.238.*',
    '204.14.239.*',
    '213.61.218.142-213.61.218.142',
    '221.133.209.128-221.133.209.159',
    '202.95.77.64-202.95.77.95',
    '198.245.95.124-198.245.95.127',
    '::1-::1',
    '127.0.0.1-127.0.0.1',
    '192.168.1.1-192.168.1.1'
);


if (!function_exists('ipv4_in_range')) {
    // ipv4_in_range
// This function takes 2 arguments, an IP address and a "range" in several
// different formats.
// Network ranges can be specified as:
// 1. Wildcard format:     1.2.3.*
// 2. CIDR format:         1.2.3/24  OR  1.2.3.4/255.255.255.0
// 3. Start-End IP format: 1.2.3.0-1.2.3.255
// The function will return true if the supplied IP is within the range.
// Note little validation is done on the range inputs - it expects you to
// use one of the above 3 formats.
    function ipv4_in_range($ip, $range) {
        if (strpos($range, '/') !== false) {
            // $range is in IP/NETMASK format
            list($range, $netmask) = explode('/', $range, 2);
            if (strpos($netmask, '.') !== false) {
                // $netmask is a 255.255.0.0 format
                $netmask = str_replace('*', '0', $netmask);
                $netmask_dec = ip2long($netmask);
                return ( (ip2long($ip) & $netmask_dec) == (ip2long($range) & $netmask_dec) );
            } else {
                // $netmask is a CIDR size block
                // fix the range argument
                $x = explode('.', $range);
                while(count($x)<4) $x[] = '0';
                list($a,$b,$c,$d) = $x;
                $range = sprintf("%u.%u.%u.%u", empty($a)?'0':$a, empty($b)?'0':$b,empty($c)?'0':$c,empty($d)?'0':$d);
                $range_dec = ip2long($range);
                $ip_dec = ip2long($ip);
                # Strategy 1 - Create the netmask with 'netmask' 1s and then fill it to 32 with 0s
                #$netmask_dec = bindec(str_pad('', $netmask, '1') . str_pad('', 32-$netmask, '0'));
                # Strategy 2 - Use math to create it
                $wildcard_dec = pow(2, (32-$netmask)) - 1;
                $netmask_dec = ~ $wildcard_dec;
                return (($ip_dec & $netmask_dec) == ($range_dec & $netmask_dec));
            }
        } else {
            // range might be 255.255.. or 1.2.3.0-1.2.3.255
            if (strpos($range, '') !==false) { // a.b..* format
                // Just convert to A-B format by setting * to 0 for A and 255 for B
                $lower = str_replace('*', '0', $range);
                $upper = str_replace('*', '255', $range);
                $range = "$lower-$upper";
            }
            if (strpos($range, '-')!==false) { // A-B format
                list($lower, $upper) = explode('-', $range, 2);
                $lower_dec = (float)sprintf("%u",ip2long($lower));
                $upper_dec = (float)sprintf("%u",ip2long($upper));
                $ip_dec = (float)sprintf("%u",ip2long($ip));
                return ( ($ip_dec>=$lower_dec) && ($ip_dec<=$upper_dec) );
            }
            return false;
        }
    }
}

$ip_address = get_ip_address();

$is_valid_ip = false;

foreach ($valid_ip_ranges as $range) {
                if (ipv4_in_range($ip_address, $range)) {
                    $is_valid_ip = true;
                }
            }

if (!$is_valid_ip) {
//                header('location:/error.php');
                header('HTTP/1.0 404 Not Found');
                http_response_code(404);
                echo "<h1>404 Not Found</h1>";
                echo "The page that you have requested could not be found.";
                exit();
            }

 ?>