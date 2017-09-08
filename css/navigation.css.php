<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Navigation styles for the pma8165 theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMA8165
 */

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
$navLineColor = '#222';
?>

/******************************************************************************/
/* Navigation */

#pma_navigation {
    width: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    overflow: hidden;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 0;
    height: 100%;
    background: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    z-index: 800;
}

#pma_navigation_content {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    <?php echo $left; ?>: 0;
    z-index: 0;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}



/******************************************************************************/
/* specific elements */

#pma_navigation div.pageselector {
    text-align: center;
    margin: 0;
    margin-<?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}

#pma_navigation div#pmalogo {
    <?php //better echo $GLOBALS['cfg']['logoBGC']; ?>
}

#pma_navigation #pmalogo,
#pma_navigation #serverChoice,
#pma_navigation #leftframelinks,
#pma_navigation #recentTableList,
#pma_navigation #databaseList,
#pma_navigation div.pageselector.dbselector {
    text-align: center;
    padding: 5px 10px 0px;
    border: 0;
}

#pma_navigation #pmalogo {padding: 20px 0 5px 0}

#pma_navigation #recentTableList select,
#pma_navigation #serverChoice select
 {
    width: 80%;
}

#pma_navigation_content > img.throbber {
    display: none !important;
    margin: .3em auto 0;
}

/* Navigation tree*/
#pma_navigation_tree {
    margin: 0;
    margin-<?php echo $left; ?>: 10px;
    color: #444;
    height: 74%;
    position: relative;
}
#pma_navigation_tree_content {
    width: 100%;
    overflow: hidden;
    overflow-y: auto;
    position: absolute;
    height: 100%;
}
#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree li.table:hover a {
    color: #fff;
}
#pma_navigation_tree li.activePointer {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}
#pma_navigation_tree li.selected {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}
#pma_navigation_tree li .dbItemControls {
    padding-left: 4px;
}
#pma_navigation_tree li .navItemControls {
    display: none;
    padding-left: 4px;
}
#pma_navigation_tree li.activePointer .navItemControls {
    display: inline;
    opacity: 0.5;
}
#pma_navigation_tree li.activePointer .navItemControls:hover {
    display: inline;
    opacity: 1.0;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 12px 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li {
    white-space: nowrap;
    clear: both;
    min-height: 16px;
}
#pma_navigation_tree img {
    margin: 0;
}
#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 16px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    height: 1.5em;
    min-width: 10px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    <?php echo $left; ?>: 0.75em;
    z-index: 0;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-<?php echo $left; ?>: 1px solid <?php echo $navLineColor; ?>;
    border-bottom: 1px solid <?php echo $navLineColor; ?>;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    <?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid <?php echo $navLineColor; ?>;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
    <?php echo $left; ?>: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -7px;
    <?php echo $left; ?>: 0;
    margin-<?php echo $left; ?>: -7px;
}
#pma_navigation_tree div.block img.ic_s_db,
#pma_navigation_tree div.block img.ic_b_newdb {
    top: -10px;
}
#pma_navigation_tree div.throbber img {
    top: 2px;
    <?php echo $left; ?>: 2px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 2em;
    height: 2em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid <?php echo $navLineColor; ?>;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
    margin-top: -14px;
    margin-bottom: -12px;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid <?php echo $navLineColor; ?>;
}

/* Fast filter */
li.fast_filter {
    padding-<?php echo $left; ?>: 0.75em;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $right; ?>: 35px;
    border-<?php echo $left; ?>: 1px solid <?php echo $navLineColor; ?>;
}
li.fast_filter input {
    padding-<?php echo $right; ?>: 1.7em;
    width: 100%;
    color: #ccc;
    background: rgba(0,0,0,0.1);
    border: 1px solid #333;
    padding:6px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    font-size: .95em;
}
li.fast_filter span {
    position: relative;
    <?php echo $right; ?>: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: <?php echo $GLOBALS['cfg']['ControlColor']; ?>;
}
/* IE10+ has its own reset X */
html.ie li.fast_filter span {
    display: none;
}
html.ie.ie9 li.fast_filter span,
html.ie.ie8 li.fast_filter span {
    display: auto;
}
html.ie li.fast_filter input {
    padding-<?php echo $right; ?>: .2em;
}
html.ie.ie9 li.fast_filter input,
html.ie.ie8 li.fast_filter input {
    padding-<?php echo $right; ?>: 1.7em;
}
li.fast_filter.db_fast_filter {
    border: 0;
}

/* Resize handler */
#pma_navigation_resizer {
    width: 3px;
    height: 100%;
    background-color: rgba(0,0,0,0.1);
    cursor: col-resize;
    position: fixed;
    top: 8em;
    <?php echo $left; ?>: 237px;
    z-index: 801;
}
#pma_navigation_collapser {
    width: 20px;
    height: 55px;
    line-height: 55px;
    background: none;
    color: <?php echo $GLOBALS['cfg']['ControlColor']; ?>;
    font-weight: bold;
    position: fixed;
    top: 0;
    padding-left: 20px;
    <?php echo $left; ?>: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    text-align: center;
    cursor: pointer;
    z-index: 800;
    text-shadow: 0px 1px 1px rgba(0,0,0,0.5);
}

#pma_navigation_header {
    background: <?php echo $GLOBALS['cfg']['HeaderBackground']; ?>;
    padding-bottom: 1em;
    margin-bottom: .5em;
    -moz-box-shadow: 5px 8px 10px rgba(0,0,0,0.15);
    -webkit-box-shadow: 5px 8px 10px rgba(0,0,0,0.15);
    box-shadow: 5px 8px 10px rgba(0,0,0,0.15);
    height: 92px;
}

#pma_navigation_tree > .pma_quick_warp {
    margin: 10px 0 10px 10px;
}

/* Quick warp links */
.pma_quick_warp {
    margin-top: 5px;
    margin-<?php echo $left; ?>: 10px;
    position: relative;
}
.pma_quick_warp .drop_list {

    display: block;
    float: <?php echo $left; ?>;
    margin-<?php echo $left; ?>: 3px;
    padding: 2px 0;

    white-space: nowrap;
    text-decoration: none;
    border: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid #151515

}
.pma_quick_warp .drop_button {

    cursor: pointer;

    padding: .2em .5em;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #ddd;
    background: #151515;
    color: #999;

    /*
    * background: #f2f2f2;
    */
}
.pma_quick_warp .drop_list:hover .drop_button {
    background: rgb(214, 73, 55);
    color: white;
}
.pma_quick_warp .drop_list ul {
    position: absolute;
    margin: 0;
    padding: 0;
    overflow: hidden;
    overflow-y: auto;
    list-style: none;
    background: #333;
    border-radius: 5px;
    -moz-border-radius: 5px;
    border: 1px solid #ddd;
    top: 100%;
<?php echo $left; ?>: 3px;
<?php echo $right; ?>: 0;
    display: none;
    z-index: 802;
}
.pma_quick_warp .drop_list:hover ul {
    display: block;
}
.pma_quick_warp .drop_list li {
    white-space: nowrap;
    padding: 0;
}
.pma_quick_warp .drop_list li > a,
.pma_quick_warp .drop_list ul > li{
    color: #FFF !important;

    display: block;
    padding: .2em .3em;
}
.pma_quick_warp .drop_list li img {
    vertical-align: sub;
}
.pma_quick_warp .drop_list li:hover {
    background: #f2f2f2;
}
.pma_quick_warp .drop_list li:hover > a,
.pma_quick_warp .drop_list ul > li:hover {
    color: rgb(214, 73, 55) !important;
    font-weight: 600;
}
.pma_quick_warp .drop_list a.favorite_table_anchor {
    clear: left;
    float: left;
    padding: .1em .3em 0;
}


/** Tree nav **/


.config-form ul.tabs li.active a {
    background-color: <?php echo $GLOBALS['cfg']['ControlColor']; ?>;
    margin-top: 2px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    border: none;
    padding: 7px 11px;
    box-shadow: 0 -1px 2px rgba(0,0,0,0.5) inset;
}



/* Navigation tree*/
#pma_navigation_tree {
    margin: 0;
    margin-<?php echo $left; ?>: 10px;
    overflow: hidden;
    height: 74%;
    position: relative;
}
#pma_navigation_select_database {
    text-align: left;
    padding: 0 0 0;
    border: 0;
    margin: 0;
}

#pma_navigation_db_select {
    margin-top: 0.5em;
    margin-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_db_select select {
    border: 1px solid #bbb;
    border-top: 1px solid #bbb;
    color: #333;
    padding: 4px 6px;
    margin: 0 0 0;
    width: 92%;
}
#pma_navigation_tree_content {
    width: 100%;
    overflow: hidden;
    overflow-y: auto;
    position: absolute;
    height: 100%;
}
#pma_navigation_tree li .dbItemControls {
    padding-left: 4px;
}
#pma_navigation_tree li .navItemControls {
    display: none;
    padding-left: 4px;
}
#pma_navigation_tree li.activePointer .navItemControls {
    display: inline;
    opacity: 0.5;
}
#pma_navigation_tree li.activePointer .navItemControls:hover {
    display: inline;
    opacity: 1.0;
}
#pma_navigation_tree_content a.hover_show_full {
    position: relative;
    z-index: 100;
}
#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree a:hover {
    text-decoration: none;
    color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}
#pma_navigation_tree li.activePointer {
    color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}
#pma_navigation_tree li.selected {
    color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li {
    white-space: nowrap;
    clear: both;
    min-height: 17px;
}
#pma_navigation_tree img {
    margin: 0;
}
#pma_navigation_tree i {
    display: block;
}
#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 2em;
    min-width: 16px;
    min-height: 16px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block.double {
    width: 2.5em;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 2em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
<?php echo $left; ?>: 0.75em;
    z-index: 0;
    margin-top: -4px;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-<?php echo $left; ?>: 1px solid #616161;
    border-bottom: 1px solid #616161;
    position: relative;
    z-index: 0;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
<?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #616161;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
<?php echo $left; ?>: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block a + a {
<?php echo $left; ?>: 100%;
}
#pma_navigation_tree div.block.double a,
#pma_navigation_tree div.block.double u {
<?php echo $left; ?>: 33%;
}
#pma_navigation_tree div.block.double a + a {
<?php echo $left; ?>: 85%;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -0.3em;
<?php echo $left; ?>: 0;
    margin-<?php echo $left; ?>: -7px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid #616161;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid #616161;
}

#navigation_controls_outer {
    min-height: 21px !important;
}

#pma_navigation_collapse {
    padding-right: 2px;
}

#navigation_controls_outer.activePointer {
    background-color: transparent !important;
}

#navigation_controls {
    float: right;
    padding-right: 23px;
}
