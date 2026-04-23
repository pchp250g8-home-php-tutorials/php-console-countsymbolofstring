<?php
    echo("Input a string:\r\n");
    $strLine = chop(fgets(STDIN));
    echo("Input a symbol\r\n");
    fscanf(STDIN," %1s", $chSym);
    $nLen = strlen($strLine);
    $c = 0;
    for ($i = 0; $i < $nLen; $i++)
    {
        if ($chSym == $strLine[$i])
        {
            $c++;
        }  
    }
    $fltPart = ($c / $nLen) * 100;
    printf("The symbol \"%s\" occurs %d times\r\n", $chSym, $c);
    printf
    (
        "The symbol \"%s\" occupies %.2f %% of the string \"%s\"\r\n", 
        $chSym, $fltPart, $strLine
    );
    fgetc(STDIN); 
?>