<?
require_once( 'common/includes/common_header.php' );
$SITE_TITLE = 'Points Board';
?>

<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <title><?= $SITE_TITLE ?></title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <div id="#containter">
            <div id="header"><?= $SITE_TITLE ?></div>
            <div id="sidebar">
                <div class="sidebar_section">
                    <span class="section_title">Username</span>
                    <ul class="section_options">
                        <li class="show_children">Group 1</li>
                        <li>Group 2</li>
                        <li>Group 3</li>
                        <li>Group 4</li>
                    </ul>
                </div>
                <div class="sidebar_section">
                    <span class ="sidebar_title">User Actions</span>
                    <ul class="section_options">
                        <li>Invites (3)</li>
                        <li>Change Password</li>
                        <li>Leave a Group</li>
                        <li>Make a Group</li>
                    </ul>
                </div>
            </div>
            <div id="points_board">
                <span id="points_title">Group 1</span>
                <ul id="points_log">    
                    <li>John gave Bob 8 points for not sucking</li>
                    <li>John gave Alice -4 points for not sucking</li>
                    <li>Michael gave Brent -2 points for not sucking</li>
                    <li>John gave Claire 12 points for not sucking</li>
                    <li>Richard gave Maddi -6 points for not sucking</li>
                </ul>
            </div>
        </div>
    </body>
</html>
