# PHP Static Mastodon

The goal of this project is to add a blog to the fediverse while also hosting it on a php-based webhoster like Hetzner.

## webfinger

this is the initial entrypoint. This request can also contain params for the account that is being requested, but with only one account we can ignore this.

Shout out to https://justingarrison.com/blog/2022-12-06-mastodon-files-instance/

## actor.json

shout out to https://maho.dev/2024/02/a-guide-to-implement-activitypub-in-a-static-site-or-any-website/

contains the profile information. It is important that this information is delivered with `content-type: application/activity+json` header, otherwise it will not work! thus the `.htaccess` file
