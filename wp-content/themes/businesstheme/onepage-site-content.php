<?php 
//Template Name:One Page Site
include_once(get_template_directory()."/onepage-site-header.php");

?>
<?php
get_template_part('part/usort');
$file_name=array();
foreach(glob(get_template_directory()."/part/*.php") as $parts)
{
    $file_name[]=basename($parts,'.php');


    //get_template_part("parts/$file_name");
}
$desired_order=['services','portfolio','about','team','clients','contact','portfoliodetail','usort'];

usort($file_name,'file_sort');

foreach($file_name as $file_desired_order)
{
    if(in_array($file_desired_order,array('portfoliodetail','usort')))
        continue;
    get_template_part("part/$file_desired_order");
}
?>
<?php get_footer(); ?>

