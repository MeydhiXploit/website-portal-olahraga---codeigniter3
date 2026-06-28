<?php
// Mock session superglobal before CI starts
session_start();
$_SESSION['id'] = 1;
$_SESSION['role'] = 'admin';
$_SESSION['username'] = 'admin';

$_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

// Bootstrap CI
ob_start();
require_once 'index.php';
ob_end_clean();

$CI =& get_instance();
$CI->load->model('M_Match');

echo "=== DEBUG ROWS ===\n";
$all_matches = $CI->db->get('sport_match')->result();
echo "All matches count: " . count($all_matches) . "\n";
print_r($all_matches);
