<?php\n\t\t\t\n\t\t\t\t\t\t\tsession_start();\n\t\t\t\t\t\t\tif(empty($_SESSION[\"userid\"]))\n\t\t\t\t\t\t\t\t\theader(\"Location: index.php\",true,301);\n\t\t\t\t\t\t\t\telse{\n\t\t\t\t\t\t\t\t\t\t$user=$_SESSION[\"userid\"];\n\t\t\t\t\t\t echo \"\\t\".$user;}\n\t\t\t\n\t\t\t\n\t\t\t\t\t\t ?>