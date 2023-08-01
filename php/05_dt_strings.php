<html><body><?php 

// your code here...

// strlen() --> length of string string.length()
echo strlen("PHP Functions for String");
echo "<br/>";

// str_word_count() ---> number of words
echo str_word_count("PHP Functions for String");
echo "<br/>";

// strrev() --> reverse string
echo strrev("PHP Functions for String");
echo "<br/>";

// str_replace() --> str_replace(s, r, w, c)
echo str_replace('a', 'x', 'Mary had a little lamb');
echo "<br/>";

// strcmp --> compare strings, 0 if equal
echo strcmp("Lean", "lean");
echo "<br/>";

// substr_replace --> replace a portion of text within a larger string
echo substr_replace("PHP Functions for String", "Lessons", 4, 9);
echo "<br/>";
echo str_replace("Functions", "Lessons", "PHP Functions for String") ;
echo "<br/>";

// strpos() --> possition of char within a string
echo strpos("PHP Functions for String", "Funx");

?></body></html>