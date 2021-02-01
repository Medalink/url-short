## URL Shorten Project

#### Setup
First copy the `.env.example` to `.env`

Start our docker containers with `lando start`

Run `lando artisan migrate:fresh --seed`

#### Registration
Visit [https://url-short.lndo.site/register](https://url-short.lndo.site/register) to create a new user. Once created you can [https://url-short.lndo.site/login](login) to create a token.

 #### Tokens
 Create a token at [https://url-short.lndo.site/user/api-tokens](https://url-short.lndo.site/user/api-tokens) page. 
 
 Once you have a token paste it into the postman collection (see: url-short.postman_collection.json file) to test the API endpoints. The token will be used as Authorization Bearer token.
