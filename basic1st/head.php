<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<header id="firstheader">
<a href="<?php echo G5_URL ?>">회사명</a>

        <ul>
<?php if ($is_member) {  ?>


            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</b></a></li>
            <?php }  ?>
        </ul>
         <?php  include(G5_THEME_PATH.'/skin/nav/menu.php'); ?> 
           
            
        
</header>

<?php    if(defined('_INDEX_')) {     // index에서만 실행?>

<section id="recomm_book">
main selection
</section> 

<?}else{?>

<section id="recomm_book">
sub selection

<h2><?php echo $g5['title']; ?>
    <?php echo $board['bo_subject']; ?>
</h2>
</section>

<?}?>

<div id="content" style="overflow:hidden">
    <?php
    if(defined('_INDEX_')) {     // index에서만 실행
    ?>
    <div class="content" style="width:100%;">
    <?}else{?>
    <div class="content" style="width:75%;float:left">
    <?}?>
