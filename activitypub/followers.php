{
    "@context": "https://www.w3.org/ns/activitystreams",
    "id": "https://blog.julian-lemmerich.de/activitypub/followers.php",
    "type": "OrderedCollection",
    "totalItems": <?php echo count(file('followers.txt')); ?>,
    "first": "https://blog.julian-lemmerich.de/activitypub/follower_accts.php"
}