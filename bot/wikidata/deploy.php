<?
//run everything in the site file
$file = "/data/project/addbot/wikidata/sites.php";
$text = file_get_contents($file);
$split = explode("\n",$text);

echo shell_exec("qdel -u addshore");

sleep(5);

foreach ($split as $line)
{
	echo exec("echo 'php /data/project/addbot/bot/wikidata/g.php --lang=$line' | qsub -N wd.g.$line");
	sleep(1);
}
?>