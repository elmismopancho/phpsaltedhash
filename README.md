# PHP Salted Hash
This php shows a way to securely store passwords in a database. The file index.php shows how to generate a hash, which you can store in the database. The trick with this method vs the classic md5 is that everytime you generate the hash, you get a different hash for the same text.
The validation.php file shows how to validate the hash with the text.
