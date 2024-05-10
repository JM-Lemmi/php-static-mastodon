<?php header('Content-Type: application/activity+json'); ?>
{
  "@context": "https://www.w3.org/ns/activitystreams",
  "id": "https://blog.julian-lemmerich.de/activitypub/follower_accts.php",
  "type": "OrderedCollectionPage",
  "totalItems": <?php echo count(file('followers.txt', FILE_IGNORE_NEW_LINES + FILE_SKIP_EMPTY_LINES)); ?>,
  "partOf": "https://blog.julian-lemmerich.de/activitypub/follower_accts.php",
  "orderedItems": <?php echo json_encode(file('followers.txt', FILE_IGNORE_NEW_LINES + FILE_SKIP_EMPTY_LINES)); ?>
}