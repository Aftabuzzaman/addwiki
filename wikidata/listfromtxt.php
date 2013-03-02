<?PHP
$option = getopt("",Array("file::","lang::"));
require '../classes/database.php';
require '../enwiki/config.php';
if(!isset($option['file']) || !isset($option['lang']))
{die("Incorrect Parameters\n");}
else
{echo "Adding from ".$option['file']." to ".$option['lang']."\n";}
sleep(10);
$file = file_get_contents($option['file']);
if($file == ""){die("Empty File\n");}
$file = preg_replace("/((\*|#) ?|\[\[:?|\]\])/","",$file); // remove all square brackets (wikilinks)
$list = explode("\n",$file);
echo "Got the list\n";

echo "Connecting to DB...\n";
// connect to the database
$db = new Database( $config['dbhost'], $config['dbport'], $config['dbuser'], $config['dbpass'], $config['dbname'], false);

//If more than 1 returned
if(count($list) > 0 )
{
	foreach($list as $item) // for each item
	{
		
		if( $item != "")
		{
			usleep(1000);
			$res = $db->insert('iwlinked',array('lang' => $option['lang'],'article' => $item,) ); // inset to database table
			if( !$res  ){echo $db->errorStr()."\n";} // if no result then break as we have an error ($db->errorStr())
			else{echo "Added ".$item." to database\n";}
		}
	}
}

?>