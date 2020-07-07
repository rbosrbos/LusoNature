---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://rbos.pt/docs/collection.json)

<!-- END_INFO -->

#


<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_4da47a53f07b05619bb8e7a66a3d2172 -->
## Overwrides native logout for keeping other possible sessions opened

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/logout`


<!-- END_4da47a53f07b05619bb8e7a66a3d2172 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## Show the administration dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## admin/login
> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/logout`


<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## admin/login
> Example request:

```bash
curl -X POST \
    "http://rbos.pt/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_f611ae8378c7426b163ac3d140ded37c -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/admin/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/email`


<!-- END_f611ae8378c7426b163ac3d140ded37c -->

<!-- START_583a6990174e55a2eb91791ae4776c83 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/password/reset`


<!-- END_583a6990174e55a2eb91791ae4776c83 -->

<!-- START_d155055b87508acb9e934bcf9407b028 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/reset`


<!-- END_d155055b87508acb9e934bcf9407b028 -->

<!-- START_968312b0cceac43f210857c19898f766 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/password/reset/{token}`


<!-- END_968312b0cceac43f210857c19898f766 -->

<!-- START_044f3f8a4836fd20561e8e0313bdfc03 -->
## Show the news administration dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/news`


<!-- END_044f3f8a4836fd20561e8e0313bdfc03 -->

<!-- START_72203ec20a06b583a2d3aa35baa5eb20 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/news/create`


<!-- END_72203ec20a06b583a2d3aa35baa5eb20 -->

<!-- START_8ee3e6279b1dc9fec06aee4e7dc0079d -->
## Show the places administration dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/places/{status}`


<!-- END_8ee3e6279b1dc9fec06aee4e7dc0079d -->

<!-- START_31f3765c58acde544142833b21973399 -->
## Aprove place submission

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/admin/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/places/{id}`


<!-- END_31f3765c58acde544142833b21973399 -->

<!-- START_02a36753ca1821e2471c4f261714d951 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/admin/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/places/{id}`


<!-- END_02a36753ca1821e2471c4f261714d951 -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## Lists all users

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_e23c0a400f599b52984393daa4e11454 -->
## User edit form

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/admin/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{id}/edit`


<!-- END_e23c0a400f599b52984393daa4e11454 -->

<!-- START_962391d4c0bde76b28b720c41e1a6211 -->
## User update procedures

> Example request:

```bash
curl -X PUT \
    "http://rbos.pt/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/users/{id}`


<!-- END_962391d4c0bde76b28b720c41e1a6211 -->

<!-- START_ff0c8890a029256daf70dac0fed732ec -->
## Destroy user procedure

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{id}`


<!-- END_ff0c8890a029256daf70dac0fed732ec -->

<!-- START_28d16329b9ea76320870bd3586c9e802 -->
## Delete user&#039;s avatar

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/admin/users/1/avatar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/admin/users/1/avatar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{id}/avatar`


<!-- END_28d16329b9ea76320870bd3586c9e802 -->

<!-- START_33ab4b680b41a034881afb080e2d14e2 -->
## User index for places

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/user/places" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/user/places"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET user/places`


<!-- END_33ab4b680b41a034881afb080e2d14e2 -->

<!-- START_3bcedda78ae45ef5c0f4c97a4963b7a1 -->
## Show user profile

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET user`


<!-- END_3bcedda78ae45ef5c0f4c97a4963b7a1 -->

<!-- START_3efbce72c5183a8fae61143a8bcdd44a -->
## Store/Updates User Avatar

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user`


<!-- END_3efbce72c5183a8fae61143a8bcdd44a -->

<!-- START_7918d9f1ab4b0bdb25a75473dca51c27 -->
## user/{user}
> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET user/{user}`


<!-- END_7918d9f1ab4b0bdb25a75473dca51c27 -->

<!-- START_c3f689a804341d95e136d0131312e64f -->
## Delete user avatar

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE user/{user}`


<!-- END_c3f689a804341d95e136d0131312e64f -->

<!-- START_7bfa22a5b2bbaaa7af1ecdaf00901436 -->
## Display all news

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET news`


<!-- END_7bfa22a5b2bbaaa7af1ecdaf00901436 -->

<!-- START_db62dd318e277e4014f8dff3b6dbfd9a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET news/create`


<!-- END_db62dd318e277e4014f8dff3b6dbfd9a -->

<!-- START_cdb685a5268c111cd7ef8efc52ef58a6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST news`


<!-- END_cdb685a5268c111cd7ef8efc52ef58a6 -->

<!-- START_3dfb871bf4d7a5c8350bd651c19a860f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET news/{news}`


<!-- END_3dfb871bf4d7a5c8350bd651c19a860f -->

<!-- START_514597daae3f4521d8d03461b4a39560 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/news/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET news/{news}/edit`


<!-- END_514597daae3f4521d8d03461b4a39560 -->

<!-- START_578f825bef9205216833a2cf5d916d27 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://rbos.pt/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT news/{news}`

`PATCH news/{news}`


<!-- END_578f825bef9205216833a2cf5d916d27 -->

<!-- START_ec410fc808d0ea6688b500f883d32382 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE news/{news}`


<!-- END_ec410fc808d0ea6688b500f883d32382 -->

<!-- START_5ff5a581d4c1da2ea0b6ced884e5d239 -->
## Public page for places

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET place`


<!-- END_5ff5a581d4c1da2ea0b6ced884e5d239 -->

<!-- START_0911ed2a1b91d1181ba1e423a92765b9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/place/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET place/create`


<!-- END_0911ed2a1b91d1181ba1e423a92765b9 -->

<!-- START_6c86e87afda523420a120a1ead3bb54d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST place`


<!-- END_6c86e87afda523420a120a1ead3bb54d -->

<!-- START_41d9e2e16899757e015ebd3c0c3518e7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/place/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET place/{place}`


<!-- END_41d9e2e16899757e015ebd3c0c3518e7 -->

<!-- START_588a4a520ad42c2dfdec21c2d2990917 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/place/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Can't touch this"
}
```

### HTTP Request
`GET place/{place}/edit`


<!-- END_588a4a520ad42c2dfdec21c2d2990917 -->

<!-- START_70f4bc4e0f0397febd577f31b1a292e1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://rbos.pt/place/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT place/{place}`

`PATCH place/{place}`


<!-- END_70f4bc4e0f0397febd577f31b1a292e1 -->

<!-- START_9dd5426c6675ca6b6f7761abfd8291eb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/place/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/place/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE place/{place}`


<!-- END_9dd5426c6675ca6b6f7761abfd8291eb -->

<!-- START_5d6f2f810eb12b235b5d23b7469f7ae1 -->
## Display comments

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET comment/{status}`


<!-- END_5d6f2f810eb12b235b5d23b7469f7ae1 -->

<!-- START_4479052af7e53f808c3e66f3a63e68f3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST comment`


<!-- END_4479052af7e53f808c3e66f3a63e68f3 -->

<!-- START_e269e219339a4530840c8fd70837b485 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/comment/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/comment/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET comment/{comment}/edit`


<!-- END_e269e219339a4530840c8fd70837b485 -->

<!-- START_086c8c52b8ce9daf3c4e22a51eed466a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://rbos.pt/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT comment/{comment}`

`PATCH comment/{comment}`


<!-- END_086c8c52b8ce9daf3c4e22a51eed466a -->

<!-- START_96f948918a2fdce8e599741680346e3d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://rbos.pt/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE comment/{comment}`


<!-- END_96f948918a2fdce8e599741680346e3d -->

<!-- START_679ea4e19d49028fd5a7bd6ee9f0f308 -->
## contact
> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/contact" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/contact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET contact`


<!-- END_679ea4e19d49028fd5a7bd6ee9f0f308 -->

<!-- START_ff21dab5fc2b19be22cfd90453896b8d -->
## contact
> Example request:

```bash
curl -X POST \
    "http://rbos.pt/contact" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/contact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST contact`


<!-- END_ff21dab5fc2b19be22cfd90453896b8d -->

<!-- START_c09ab6b79427f554918b5059dc67236c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/forecast" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/forecast"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET forecast`


<!-- END_c09ab6b79427f554918b5059dc67236c -->

<!-- START_340acd6687bc01574027d8c2f4df678c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/rating/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/rating/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST rating/{rate?}`


<!-- END_340acd6687bc01574027d8c2f4df678c -->

<!-- START_a824fc42f761eee232ba6010c8f7641d -->
## search
> Example request:

```bash
curl -X POST \
    "http://rbos.pt/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST search`


<!-- END_a824fc42f761eee232ba6010c8f7641d -->

<!-- START_0bf3e31d25b0a6e6ee79d3b1a77f3a67 -->
## search/{page?}
> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/search/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/search/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET search/{page?}`


<!-- END_0bf3e31d25b0a6e6ee79d3b1a77f3a67 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://rbos.pt/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

#Categories


Categories API
<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Display all categories

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Beaches"
    },
    {
        "id": 2,
        "name": "Forests"
    },
    {
        "id": 3,
        "name": "Camping"
    },
    {
        "id": 4,
        "name": "Fun"
    }
]
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

#Cities


Cities API
<!-- START_56d7be9447e2ce39ac69b09141bf5902 -->
## Display all cities

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/api/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/api/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Abrantes"
    },
    {
        "id": 2,
        "name": "Águeda"
    },
    {
        "id": 3,
        "name": "Aguiar da Beira"
    },
    {
        "id": 4,
        "name": "Alandroal"
    },
    {
        "id": 5,
        "name": "Albergaria-a-Velha"
    },
    {
        "id": 6,
        "name": "Albufeira"
    },
    {
        "id": 7,
        "name": "Alcácer do Sal"
    },
    {
        "id": 8,
        "name": "Alcanena"
    },
    {
        "id": 9,
        "name": "Alcobaça"
    },
    {
        "id": 10,
        "name": "Alcochete"
    },
    {
        "id": 11,
        "name": "Alcoutim"
    },
    {
        "id": 12,
        "name": "Alenquer"
    },
    {
        "id": 13,
        "name": "Alfândega da Fé"
    },
    {
        "id": 14,
        "name": "Alijó"
    },
    {
        "id": 15,
        "name": "Aljezur"
    },
    {
        "id": 16,
        "name": "Aljustrel"
    },
    {
        "id": 17,
        "name": "Almada"
    },
    {
        "id": 18,
        "name": "Almeida"
    },
    {
        "id": 19,
        "name": "Almeirim"
    },
    {
        "id": 20,
        "name": "Almodôvar"
    },
    {
        "id": 21,
        "name": "Alpiarça"
    },
    {
        "id": 22,
        "name": "Alter do Chão"
    },
    {
        "id": 23,
        "name": "Alvaiázere"
    },
    {
        "id": 24,
        "name": "Alvito"
    },
    {
        "id": 25,
        "name": "Amadora"
    },
    {
        "id": 26,
        "name": "Amarante"
    },
    {
        "id": 27,
        "name": "Amares"
    },
    {
        "id": 28,
        "name": "Anadia"
    },
    {
        "id": 29,
        "name": "Angra do Heroísmo"
    },
    {
        "id": 30,
        "name": "Ansião"
    },
    {
        "id": 31,
        "name": "Arcos de Valdevez"
    },
    {
        "id": 32,
        "name": "Arganil"
    },
    {
        "id": 33,
        "name": "Armamar"
    },
    {
        "id": 34,
        "name": "Arouca"
    },
    {
        "id": 35,
        "name": "Arraiolos"
    },
    {
        "id": 36,
        "name": "Arronches"
    },
    {
        "id": 37,
        "name": "Arruda dos Vinhos"
    },
    {
        "id": 38,
        "name": "Aveiro"
    },
    {
        "id": 39,
        "name": "Avis"
    },
    {
        "id": 40,
        "name": "Azambuja"
    },
    {
        "id": 41,
        "name": "Baião"
    },
    {
        "id": 42,
        "name": "Barcelos"
    },
    {
        "id": 43,
        "name": "Barrancos"
    },
    {
        "id": 44,
        "name": "Barreiro"
    },
    {
        "id": 45,
        "name": "Batalha"
    },
    {
        "id": 46,
        "name": "Beja"
    },
    {
        "id": 47,
        "name": "Belmonte"
    },
    {
        "id": 48,
        "name": "Benavente"
    },
    {
        "id": 49,
        "name": "Bombarral"
    },
    {
        "id": 50,
        "name": "Borba"
    },
    {
        "id": 51,
        "name": "Boticas"
    },
    {
        "id": 52,
        "name": "Braga"
    },
    {
        "id": 53,
        "name": "Bragança"
    },
    {
        "id": 54,
        "name": "Cabeceiras de Basto"
    },
    {
        "id": 55,
        "name": "Cadaval"
    },
    {
        "id": 56,
        "name": "Caldas da Rainha"
    },
    {
        "id": 57,
        "name": "Calheta (Açores)"
    },
    {
        "id": 58,
        "name": "Calheta (Madeira)"
    },
    {
        "id": 59,
        "name": "Câmara de Lobos"
    },
    {
        "id": 60,
        "name": "Caminha"
    },
    {
        "id": 61,
        "name": "Campo Maior"
    },
    {
        "id": 62,
        "name": "Cantanhede"
    },
    {
        "id": 63,
        "name": "Carrazeda de Ansiães"
    },
    {
        "id": 64,
        "name": "Carregal do Sal"
    },
    {
        "id": 65,
        "name": "Cartaxo"
    },
    {
        "id": 66,
        "name": "Cascais"
    },
    {
        "id": 67,
        "name": "Castanheira de Pera"
    },
    {
        "id": 68,
        "name": "Castelo Branco"
    },
    {
        "id": 69,
        "name": "Castelo de Paiva"
    },
    {
        "id": 70,
        "name": "Castelo de Vide"
    },
    {
        "id": 71,
        "name": "Castro Daire"
    },
    {
        "id": 72,
        "name": "Castro Marim"
    },
    {
        "id": 73,
        "name": "Castro Verde"
    },
    {
        "id": 74,
        "name": "Celorico da Beira"
    },
    {
        "id": 75,
        "name": "Celorico de Basto"
    },
    {
        "id": 76,
        "name": "Chamusca"
    },
    {
        "id": 77,
        "name": "Chaves"
    },
    {
        "id": 78,
        "name": "Cinfães"
    },
    {
        "id": 79,
        "name": "Coimbra"
    },
    {
        "id": 80,
        "name": "Condeixa-a-Nova"
    },
    {
        "id": 81,
        "name": "Constância"
    },
    {
        "id": 82,
        "name": "Coruche"
    },
    {
        "id": 83,
        "name": "Corvo"
    },
    {
        "id": 84,
        "name": "Covilhã"
    },
    {
        "id": 85,
        "name": "Crato"
    },
    {
        "id": 86,
        "name": "Cuba"
    },
    {
        "id": 87,
        "name": "Elvas"
    },
    {
        "id": 88,
        "name": "Entroncamento"
    },
    {
        "id": 89,
        "name": "Espinho"
    },
    {
        "id": 90,
        "name": "Esposende"
    },
    {
        "id": 91,
        "name": "Estarreja"
    },
    {
        "id": 92,
        "name": "Estremoz"
    },
    {
        "id": 93,
        "name": "Évora"
    },
    {
        "id": 94,
        "name": "Fafe"
    },
    {
        "id": 95,
        "name": "Faro"
    },
    {
        "id": 96,
        "name": "Felgueiras"
    },
    {
        "id": 97,
        "name": "Ferreira do Alentejo"
    },
    {
        "id": 98,
        "name": "Ferreira do Zêzere"
    },
    {
        "id": 99,
        "name": "Figueira da Foz"
    },
    {
        "id": 100,
        "name": "Figueira de Castelo Rodrigo"
    },
    {
        "id": 101,
        "name": "Figueiró dos Vinhos"
    },
    {
        "id": 102,
        "name": "Fornos de Algodres"
    },
    {
        "id": 103,
        "name": "Freixo de Espada à Cinta"
    },
    {
        "id": 104,
        "name": "Fronteira"
    },
    {
        "id": 105,
        "name": "Funchal"
    },
    {
        "id": 106,
        "name": "Fundão"
    },
    {
        "id": 107,
        "name": "Gavião"
    },
    {
        "id": 108,
        "name": "Góis"
    },
    {
        "id": 109,
        "name": "Golegã"
    },
    {
        "id": 110,
        "name": "Gondomar"
    },
    {
        "id": 111,
        "name": "Gouveia"
    },
    {
        "id": 112,
        "name": "Grândola"
    },
    {
        "id": 113,
        "name": "Guarda"
    },
    {
        "id": 114,
        "name": "Guimarães"
    },
    {
        "id": 115,
        "name": "Horta"
    },
    {
        "id": 116,
        "name": "Idanha-a-Nova"
    },
    {
        "id": 117,
        "name": "Ílhavo"
    },
    {
        "id": 118,
        "name": "Lagoa (Açores)"
    },
    {
        "id": 119,
        "name": "Lagoa (Algarve)"
    },
    {
        "id": 120,
        "name": "Lagos"
    },
    {
        "id": 121,
        "name": "Lajes das Flores"
    },
    {
        "id": 122,
        "name": "Lajes do Pico"
    },
    {
        "id": 123,
        "name": "Lamego"
    },
    {
        "id": 124,
        "name": "Leiria"
    },
    {
        "id": 125,
        "name": "Lisboa"
    },
    {
        "id": 126,
        "name": "Loulé"
    },
    {
        "id": 127,
        "name": "Loures"
    },
    {
        "id": 128,
        "name": "Lourinhã"
    },
    {
        "id": 129,
        "name": "Lousã"
    },
    {
        "id": 130,
        "name": "Lousada"
    },
    {
        "id": 131,
        "name": "Mação"
    },
    {
        "id": 132,
        "name": "Macedo de Cavaleiros"
    },
    {
        "id": 133,
        "name": "Machico"
    },
    {
        "id": 134,
        "name": "Madalena"
    },
    {
        "id": 135,
        "name": "Mafra"
    },
    {
        "id": 136,
        "name": "Maia"
    },
    {
        "id": 137,
        "name": "Mangualde"
    },
    {
        "id": 138,
        "name": "Manteigas"
    },
    {
        "id": 139,
        "name": "Marco de Canaveses"
    },
    {
        "id": 140,
        "name": "Marinha Grande"
    },
    {
        "id": 141,
        "name": "Marvão"
    },
    {
        "id": 142,
        "name": "Matosinhos"
    },
    {
        "id": 143,
        "name": "Mealhada"
    },
    {
        "id": 144,
        "name": "Meda"
    },
    {
        "id": 145,
        "name": "Melgaço"
    },
    {
        "id": 146,
        "name": "Mértola"
    },
    {
        "id": 147,
        "name": "Mesão Frio"
    },
    {
        "id": 148,
        "name": "Mira"
    },
    {
        "id": 149,
        "name": "Miranda do Corvo"
    },
    {
        "id": 150,
        "name": "Miranda do Douro"
    },
    {
        "id": 151,
        "name": "Mirandela"
    },
    {
        "id": 152,
        "name": "Mogadouro"
    },
    {
        "id": 153,
        "name": "Moimenta da Beira"
    },
    {
        "id": 154,
        "name": "Moita"
    },
    {
        "id": 155,
        "name": "Monção"
    },
    {
        "id": 156,
        "name": "Monchique"
    },
    {
        "id": 157,
        "name": "Mondim de Basto"
    },
    {
        "id": 158,
        "name": "Monforte"
    },
    {
        "id": 159,
        "name": "Montalegre"
    },
    {
        "id": 160,
        "name": "Montemor-o-Novo"
    },
    {
        "id": 161,
        "name": "Montemor-o-Velho"
    },
    {
        "id": 162,
        "name": "Montijo"
    },
    {
        "id": 163,
        "name": "Mora"
    },
    {
        "id": 164,
        "name": "Mortágua"
    },
    {
        "id": 165,
        "name": "Moura"
    },
    {
        "id": 166,
        "name": "Mourão"
    },
    {
        "id": 167,
        "name": "Murça"
    },
    {
        "id": 168,
        "name": "Murtosa"
    },
    {
        "id": 169,
        "name": "Nazaré"
    },
    {
        "id": 170,
        "name": "Nelas"
    },
    {
        "id": 171,
        "name": "Nisa"
    },
    {
        "id": 172,
        "name": "Nordeste"
    },
    {
        "id": 173,
        "name": "Óbidos"
    },
    {
        "id": 174,
        "name": "Odemira"
    },
    {
        "id": 175,
        "name": "Odivelas"
    },
    {
        "id": 176,
        "name": "Oeiras"
    },
    {
        "id": 177,
        "name": "Oleiros"
    },
    {
        "id": 178,
        "name": "Olhão"
    },
    {
        "id": 179,
        "name": "Oliveira de Azeméis"
    },
    {
        "id": 180,
        "name": "Oliveira de Frades"
    },
    {
        "id": 181,
        "name": "Oliveira do Bairro"
    },
    {
        "id": 182,
        "name": "Oliveira do Hospital"
    },
    {
        "id": 183,
        "name": "Olivença"
    },
    {
        "id": 184,
        "name": "Ourém"
    },
    {
        "id": 185,
        "name": "Ourique"
    },
    {
        "id": 186,
        "name": "Ovar"
    },
    {
        "id": 187,
        "name": "Paços de Ferreira"
    },
    {
        "id": 188,
        "name": "Palmela"
    },
    {
        "id": 189,
        "name": "Pampilhosa da Serra"
    },
    {
        "id": 190,
        "name": "Paredes"
    },
    {
        "id": 191,
        "name": "Paredes de Coura"
    },
    {
        "id": 192,
        "name": "Pedrógão Grande"
    },
    {
        "id": 193,
        "name": "Penacova"
    },
    {
        "id": 194,
        "name": "Penafiel"
    },
    {
        "id": 195,
        "name": "Penalva do Castelo"
    },
    {
        "id": 196,
        "name": "Penamacor"
    },
    {
        "id": 197,
        "name": "Penedono"
    },
    {
        "id": 198,
        "name": "Penela"
    },
    {
        "id": 199,
        "name": "Peniche"
    },
    {
        "id": 200,
        "name": "Peso da Régua"
    },
    {
        "id": 201,
        "name": "Pinhel"
    },
    {
        "id": 202,
        "name": "Pombal"
    },
    {
        "id": 203,
        "name": "Ponta Delgada"
    },
    {
        "id": 204,
        "name": "Ponta do Sol"
    },
    {
        "id": 205,
        "name": "Ponte da Barca"
    },
    {
        "id": 206,
        "name": "Ponte de Lima"
    },
    {
        "id": 207,
        "name": "Ponte de Sor"
    },
    {
        "id": 208,
        "name": "Portalegre"
    },
    {
        "id": 209,
        "name": "Portel"
    },
    {
        "id": 210,
        "name": "Portimão"
    },
    {
        "id": 211,
        "name": "Porto"
    },
    {
        "id": 212,
        "name": "Porto de Mós"
    },
    {
        "id": 213,
        "name": "Porto Moniz"
    },
    {
        "id": 214,
        "name": "Porto Santo"
    },
    {
        "id": 215,
        "name": "Póvoa de Lanhoso"
    },
    {
        "id": 216,
        "name": "Póvoa de Varzim"
    },
    {
        "id": 217,
        "name": "Povoação"
    },
    {
        "id": 218,
        "name": "Praia da Vitória"
    },
    {
        "id": 219,
        "name": "Proença-a-Nova"
    },
    {
        "id": 220,
        "name": "Redondo"
    },
    {
        "id": 221,
        "name": "Reguengos de Monsaraz"
    },
    {
        "id": 222,
        "name": "Resende"
    },
    {
        "id": 223,
        "name": "Ribeira Brava"
    },
    {
        "id": 224,
        "name": "Ribeira de Pena"
    },
    {
        "id": 225,
        "name": "Ribeira Grande"
    },
    {
        "id": 226,
        "name": "Rio Maior"
    },
    {
        "id": 227,
        "name": "Sabrosa"
    },
    {
        "id": 228,
        "name": "Sabugal"
    },
    {
        "id": 229,
        "name": "Salvaterra de Magos"
    },
    {
        "id": 230,
        "name": "Santa Comba Dão"
    },
    {
        "id": 231,
        "name": "Santa Cruz"
    },
    {
        "id": 232,
        "name": "Santa Cruz da Graciosa"
    },
    {
        "id": 233,
        "name": "Santa Cruz das Flores"
    },
    {
        "id": 234,
        "name": "Santa Maria da Feira"
    },
    {
        "id": 235,
        "name": "Santa Marta de Penaguião"
    },
    {
        "id": 236,
        "name": "Santana"
    },
    {
        "id": 237,
        "name": "Santarém"
    },
    {
        "id": 238,
        "name": "Santiago do Cacém"
    },
    {
        "id": 239,
        "name": "Santo Tirso"
    },
    {
        "id": 240,
        "name": "São Brás de Alportel"
    },
    {
        "id": 241,
        "name": "São João da Madeira"
    },
    {
        "id": 242,
        "name": "São João da Pesqueira"
    },
    {
        "id": 243,
        "name": "São Pedro do Sul"
    },
    {
        "id": 244,
        "name": "São Roque do Pico"
    },
    {
        "id": 245,
        "name": "São Vicente"
    },
    {
        "id": 246,
        "name": "Sardoal"
    },
    {
        "id": 247,
        "name": "Sátão"
    },
    {
        "id": 248,
        "name": "Seia"
    },
    {
        "id": 249,
        "name": "Seixal"
    },
    {
        "id": 250,
        "name": "Sernancelhe"
    },
    {
        "id": 251,
        "name": "Serpa"
    },
    {
        "id": 252,
        "name": "Sertã"
    },
    {
        "id": 253,
        "name": "Sesimbra"
    },
    {
        "id": 254,
        "name": "Setúbal"
    },
    {
        "id": 255,
        "name": "Sever do Vouga"
    },
    {
        "id": 256,
        "name": "Silves"
    },
    {
        "id": 257,
        "name": "Sines"
    },
    {
        "id": 258,
        "name": "Sintra"
    },
    {
        "id": 259,
        "name": "Sobral de Monte Agraço"
    },
    {
        "id": 260,
        "name": "Soure"
    },
    {
        "id": 261,
        "name": "Sousel"
    },
    {
        "id": 262,
        "name": "Tábua"
    },
    {
        "id": 263,
        "name": "Tabuaço"
    },
    {
        "id": 264,
        "name": "Tarouca"
    },
    {
        "id": 265,
        "name": "Tavira"
    },
    {
        "id": 266,
        "name": "Terras de Bouro"
    },
    {
        "id": 267,
        "name": "Tomar"
    },
    {
        "id": 268,
        "name": "Tondela"
    },
    {
        "id": 269,
        "name": "Torre de Moncorvo"
    },
    {
        "id": 270,
        "name": "Torres Novas"
    },
    {
        "id": 271,
        "name": "Torres Vedras"
    },
    {
        "id": 272,
        "name": "Trancoso"
    },
    {
        "id": 273,
        "name": "Trofa"
    },
    {
        "id": 274,
        "name": "Vagos"
    },
    {
        "id": 275,
        "name": "Vale de Cambra"
    },
    {
        "id": 276,
        "name": "Valença"
    },
    {
        "id": 277,
        "name": "Valongo"
    },
    {
        "id": 278,
        "name": "Valpaços"
    },
    {
        "id": 279,
        "name": "Velas"
    },
    {
        "id": 280,
        "name": "Vendas Novas"
    },
    {
        "id": 281,
        "name": "Viana do Alentejo"
    },
    {
        "id": 282,
        "name": "Viana do Castelo"
    },
    {
        "id": 283,
        "name": "Vidigueira"
    },
    {
        "id": 284,
        "name": "Vieira do Minho"
    },
    {
        "id": 285,
        "name": "Vila de Rei"
    },
    {
        "id": 286,
        "name": "Vila do Bispo"
    },
    {
        "id": 287,
        "name": "Vila do Conde"
    },
    {
        "id": 288,
        "name": "Vila do Porto"
    },
    {
        "id": 289,
        "name": "Vila Flor"
    },
    {
        "id": 290,
        "name": "Vila Franca de Xira"
    },
    {
        "id": 291,
        "name": "Vila Franca do Campo"
    },
    {
        "id": 292,
        "name": "Vila Nova da Barquinha"
    },
    {
        "id": 293,
        "name": "Vila Nova de Cerveira"
    },
    {
        "id": 294,
        "name": "Vila Nova de Famalicão"
    },
    {
        "id": 295,
        "name": "Vila Nova de Foz Côa"
    },
    {
        "id": 296,
        "name": "Vila Nova de Gaia"
    },
    {
        "id": 297,
        "name": "Vila Nova de Paiva"
    },
    {
        "id": 298,
        "name": "Vila Nova de Poiares"
    },
    {
        "id": 299,
        "name": "Vila Pouca de Aguiar"
    },
    {
        "id": 300,
        "name": "Vila Real"
    },
    {
        "id": 301,
        "name": "Vila Real de Santo António"
    },
    {
        "id": 302,
        "name": "Vila Velha de Ródão"
    },
    {
        "id": 303,
        "name": "Vila Verde"
    },
    {
        "id": 304,
        "name": "Vila Viçosa"
    },
    {
        "id": 305,
        "name": "Vimioso"
    },
    {
        "id": 306,
        "name": "Vinhais"
    },
    {
        "id": 307,
        "name": "Viseu"
    },
    {
        "id": 308,
        "name": "Vizela"
    },
    {
        "id": 309,
        "name": "Vouzela"
    }
]
```

### HTTP Request
`GET api/cities`


<!-- END_56d7be9447e2ce39ac69b09141bf5902 -->

#News


News API
<!-- START_5dd1068d84cb8b472b4e1b34928a56af -->
## Display a list of all news

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/api/news?num=100&latest_month=false" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/api/news"
);

let params = {
    "num": "100",
    "latest_month": "false",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Gryphon. 'I mean, what makes them sour--and camomile that makes people hot-tempered,' she went in.",
        "body": "Queen merely remarking as it happens; and if it had no idea how confusing it is you hate--C and D,' she added in a soothing tone: 'don't be angry about it. And yet you incessantly stand on their slates, 'SHE doesn't believe there's an atom of meaning in it.' The jury all brightened up again.) 'Please your Majesty,' the Hatter began, in rather a complaining tone, 'and they drew all manner of things--everything that begins with an anxious look at it!' This speech caused a remarkable sensation among the party. Some of the players to be said. At last the Dodo could not even get her head pressing against the ceiling, and had to stoop to save her neck from being run over; and the pair of gloves and a Canary called out 'The Queen! The Queen!' and the arm that was trickling down his cheeks, he went on in these words: 'Yes, we went to school in the wood, 'is to grow to my right size again; and the m--' But here, to Alice's side as she went down to look over their heads. She felt very lonely.<p>&nbsp;<\/p>RED rose-tree, and we put a white one in by mistake; and if the Queen was in managing her flamingo: she succeeded in bringing herself down to her head, and she did not like the wind, and was going to leave the court; but on second thoughts she decided to remain where she was, and waited. When the Mouse had changed his mind, and was immediately suppressed by the way, was the Rabbit say, 'A barrowful of WHAT?' thought Alice; 'but a grin without a cat! It's the most important piece of rudeness was more than Alice could think of anything to say, she simply bowed, and took the place where it had no idea what Latitude was, or Longitude either, but thought they were all writing very busily on slates. 'What are tarts made of?' 'Pepper, mostly,' said the Mouse heard this, it turned round and swam slowly back to the Mock Turtle replied, counting off the subjects on his slate with one elbow against the roof of the e--e--evening, Beautiful, beauti--FUL SOUP!' 'Chorus again!' cried the Gryphon, before Alice could not taste theirs, and the two creatures, who had been broken to pieces. 'Please, then,' said the Mouse heard this, it turned round and swam slowly back to the whiting,' said the March Hare. 'He denies it,' said Alice. 'Anything you like,' said the Gryphon. 'The reason is,' said the Caterpillar. 'Well, perhaps your feelings may be ONE.' 'One, indeed!' said the Cat again, sitting on a crimson velvet cushion; and, last of all the while, till at last it sat for a great thistle, to keep back the wandering hair that WOULD always get into that lovely garden. First, however, she waited patiently. 'Once,' said the King; and the party went back for a good deal frightened at the number of changes she had wept when she was peering about anxiously among the trees had a door leading right into a pig, my dear,' said Alice, 'we learned French and music.' 'And washing?' said the Hatter. He came in sight of the birds hurried off to other parts of the well, and noticed that the mouse.<p>&nbsp;<\/p>She pitied him deeply. 'What is his sorrow?' she asked the Gryphon, and the three gardeners, oblong and flat, with their fur clinging close to them, and he went on in a low, hurried tone. He looked at it uneasily, shaking it every now and then treading on her lap as if she were looking over their shoulders, that all the time they had at the number of executions the Queen had only one way of expecting nothing but a pack of cards, after all. \"--SAID I COULD NOT SWIM--\" you can't help that,' said the Queen in a large plate came skimming out, straight at the thought that she was shrinking rapidly; so she went to school every day--' 'I'VE been to a farmer, you know, and he called the Queen, who were giving it a very short time the Mouse replied rather crossly: 'of course you don't!' the Hatter began, in a piteous tone. And the moral of THAT is--\"Take care of the Lobster Quadrille, that she never knew whether it was very provoking to find her way out. 'I shall be late!' (when she thought.",
        "summary": "Dormouse fell asleep instantly, and Alice was not easy to take the hint; but the tops of the bread-and-butter. Just at this moment Five, who had been broken to pieces. 'Please, then,' said Alice, 'a great girl like you,' (she might well say this), 'to go on with the Queen say only yesterday you deserved to be lost: away went Alice like the Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little recovered from the time when I sleep\" is the capital of Rome, and Rome--no, THAT'S.",
        "uuid": "d1b61e78-d48c-3be8-ae9f-ab0b94e860ca",
        "created_at": "1985-02-10T00:41:34.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 2,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "There was a body to cut it off from: that he had come to the jury. 'Not yet, not yet!' the Rabbit.",
        "body": "Gryphon. 'I've forgotten the little passage: and THEN--she found herself falling down a very melancholy voice. 'Repeat, \"YOU ARE OLD, FATHER WILLIAM,' to the King, rubbing his hands; 'so now let the jury--' 'If any one left alive!' She was moving them about as it went. So she began shrinking directly. As soon as look at me like that!' By this time she found to be no use going back to the little passage: and THEN--she found herself in the long hall, and wander about among those beds of bright flowers and the pair of white kid gloves: she took courage, and went on eagerly: 'There is such a tiny little thing!' said the Footman, and began to repeat it, but her voice sounded hoarse and strange, and the constant heavy sobbing of the table. 'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never had to double themselves up and down, and the executioner myself,' said the Mock Turtle replied; 'and then the puppy began a series of short charges at the end of the.<p>&nbsp;<\/p>Mock Turtle would be very likely to eat some of the Lobster Quadrille, that she might as well as the hall was very nearly getting up and leave the room, when her eye fell upon a Gryphon, lying fast asleep in the air, I'm afraid, but you might do something better with the clock. For instance, suppose it doesn't matter which way it was growing, and very neatly and simply arranged; the only difficulty was, that if you only walk long enough.' Alice felt dreadfully puzzled. The Hatter's remark seemed to be no sort of chance of getting up and to hear the rattle of the March Hare and his buttons, and turns out his toes.' [later editions continued as follows When the Mouse with an M, such as mouse-traps, and the March Hare. 'Sixteenth,' added the Gryphon, and the Panther were sharing a pie--' [later editions continued as follows When the pie was all finished, the Owl, as a cushion, resting their elbows on it, ('which certainly was not a moment to be a queer thing, to be in a louder tone. 'ARE you to death.\"' 'You are old,' said the last few minutes to see what was coming. It was so much contradicted in her hands, and began:-- 'You are all pardoned.' 'Come, THAT'S a good deal to come out among the bright eager eyes were looking up into a cucumber-frame, or something of the jurymen. 'No, they're not,' said the Cat, 'if you don't know of any that do,' Alice said nothing; she had felt quite strange at first; but she could not remember the simple and loving heart of her going, though she looked up and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Gryphon. 'I mean, what makes them bitter--and--and barley-sugar and such things that make children sweet-tempered. I only knew how to begin.' For, you see, Miss, we're doing our best, afore she comes, to--' At this moment the King, 'unless it was certainly not becoming. 'And that's the jury, who instantly made a rush at Alice as he spoke, and added 'It isn't mine,' said the Hatter, 'or you'll be telling me next that you had been.<p>&nbsp;<\/p>I THINK; or is it twelve? I--' 'Oh, don't bother ME,' said Alice to herself, (not in a low, trembling voice. 'There's more evidence to come before that!' 'Call the next moment she felt that she still held the pieces of mushroom in her own child-life, and the Queen's absence, and were resting in the distance, and she went in without knocking, and hurried off to the other, saying, in a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the roof. There were doors all round the refreshments!' But there seemed to Alice with one eye; but to open it; but, as the large birds complained that they couldn't see it?' So she called softly after it, never once considering how in the distance, and she did not venture to ask help of any use, now,' thought poor Alice, that she was surprised to find her way out. 'I shall do nothing of the wood to listen. The Fish-Footman began by taking the little thing was to get rather sleepy, and went in. The door led right into a large.",
        "summary": "Oh, how I wish I hadn't drunk quite so much!' said Alice, seriously, 'I'll have nothing more happened, she decided to remain where she was now only ten inches high, and her eyes to see what was going off into a cucumber-frame, or something of the goldfish kept running in her own children. 'How should I know?' said Alice, a little while, however, she again heard a voice outside, and stopped to listen. The Fish-Footman began by producing from under his arm a great crowd assembled about them--all.",
        "uuid": "45cf0328-ce30-38c9-8ba8-bd4fee8b6574",
        "created_at": "1977-04-10T16:43:22.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 3,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "That's all.' 'Thank you,' said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you.",
        "body": "I shan't! YOU do it!--That I won't, then!--Bill's to go among mad people,' Alice remarked. 'Right, as usual,' said the King. (The jury all wrote down on their backs was the BEST butter, you know.' 'I don't see how he can EVEN finish, if he would not join the dance. Would not, could not, would not join the dance? \"You can really have no idea what a delightful thing a Lobster Quadrille The Mock Turtle repeated thoughtfully. 'I should think you could keep it to her full size by this very sudden change, but she stopped hastily, for the hedgehogs; and in another moment, splash! she was small enough to get in?' 'There might be some sense in your knocking,' the Footman remarked, 'till tomorrow--' At this moment Five, who had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Duchess, it had come back with the Lory, who at last in the after-time, be herself a grown woman; and how she would manage it. 'They must.<p>&nbsp;<\/p>Her first idea was that she never knew so much at this, she came up to them she heard the Rabbit came near her, about four inches deep and reaching half down the little thing sat down at her feet, for it flashed across her mind that she ought not to lie down upon their faces. There was a table set out under a tree a few minutes she heard the Rabbit came up to them to be a lesson to you never to lose YOUR temper!' 'Hold your tongue!' added the Hatter, it woke up again with a trumpet in one hand, and Alice called out 'The race is over!' and they sat down in a tone of great curiosity. 'It's a Cheshire cat,' said the Duchess: 'flamingoes and mustard both bite. And the Eaglet bent down its head impatiently, and walked off; the Dormouse shall!' they both sat silent and looked at each other for some way, and nothing seems to suit them!' 'I haven't the least notice of them attempted to explain it is right?' 'In my youth,' said the King, the Queen, who were lying round the court with a sigh: 'he taught Laughing and Grief, they used to read fairy-tales, I fancied that kind of sob, 'I've tried the little door, so she began looking at them with large round eyes, and half believed herself in Wonderland, though she felt certain it must be getting home; the night-air doesn't suit my throat!' and a large fan in the same solemn tone, only changing the order of the trial.' 'Stupid things!' Alice began to repeat it, but her voice sounded hoarse and strange, and the other side of WHAT? The other side of the jurors had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, surprised at this, that she tipped over the wig, (look at the cook, and a long sleep you've had!' 'Oh, I've had such a thing as \"I get what I used to it in the distance, sitting sad and lonely on a little startled when she had put the Dormouse go on crying in this way! Stop this moment, and fetch me a pair of boots every Christmas.' And she began thinking over all she could even make.<p>&nbsp;<\/p>Cat. 'I said pig,' replied Alice; 'and I do it again and again.' 'You are all dry, he is gay as a partner!' cried the Mouse, who seemed too much of a muchness?' 'Really, now you ask me,' said Alice, and looking at them with one of them even when they saw the Mock Turtle persisted. 'How COULD he turn them out with trying, the poor little feet, I wonder what you're talking about,' said Alice. 'Exactly so,' said Alice. 'I wonder how many hours a day did you manage on the stairs. Alice knew it was the King; and the White Rabbit read out, at the Hatter, and here the Mock Turtle is.' 'It's the stupidest tea-party I ever saw one that size? Why, it fills the whole thing, and longed to get an opportunity of saying to her great disappointment it was certainly not becoming. 'And that's the jury, and the words came very queer to ME.' 'You!' said the Duchess, 'as pigs have to go down--Here, Bill! the master says you're to go among mad people,' Alice remarked. 'Oh, you foolish Alice!' she answered.",
        "summary": "While she was exactly one a-piece all round. (It was this last remark, 'it's a vegetable. It doesn't look like one, but it was quite surprised to find it out, we should all have our heads cut off, you know. Come on!' So they got their tails in their mouths; and the m--' But here, to Alice's side as she could. 'No,' said Alice. 'Why, there they lay sprawling about, reminding her very much confused, 'I don't think it's at all a pity. I said \"What for?\"' 'She boxed the Queen's absence, and were.",
        "uuid": "542f09dd-a620-3e0b-be99-173e4e16ede6",
        "created_at": "1978-01-09T21:54:08.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 4,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Rabbit put on one side, to look over their shoulders, that all the jelly-fish out of court!.",
        "body": "You gave us three or more; They all returned from him to you, Though they were nice grand words to say.) Presently she began nursing her child again, singing a sort of chance of this, so she began thinking over other children she knew, who might do very well without--Maybe it's always pepper that had made the whole window!' 'Sure, it does, yer honour: but it's an arm, yer honour!' 'Digging for apples, yer honour!' (He pronounced it 'arrum.') 'An arm, you goose! Who ever saw in my life!' She had quite a crowd of little Alice was so ordered about by mice and rabbits. I almost think I must be Mabel after all, and I don't remember where.' 'Well, it must be really offended. 'We won't talk about her any more if you'd rather not.' 'We indeed!' cried the Mouse, turning to Alice again. 'No, I didn't,' said Alice: 'allow me to him: She gave me a good deal: this fireplace is narrow, to be listening, so she began thinking over all she could remember about ravens and writing-desks, which wasn't.<p>&nbsp;<\/p>Alice, as she spoke--fancy CURTSEYING as you're falling through the glass, and she tried hard to whistle to it; but she could not taste theirs, and the words a little, half expecting to see if he doesn't begin.' But she went round the thistle again; then the other, and growing sometimes taller and sometimes she scolded herself so severely as to the Cheshire Cat, she was considering in her pocket) till she had not the smallest idea how to spell 'stupid,' and that makes them bitter--and--and barley-sugar and such things that make children sweet-tempered. I only knew how to set them free, Exactly as we needn't try to find that her flamingo was gone in a very little way out of the evening, beautiful Soup! Soup of the sense, and the fall NEVER come to the other birds tittered audibly. 'What I was thinking I should think!' (Dinah was the White Rabbit returning, splendidly dressed, with a sudden leap out of his great wig.' The judge, by the pope, was soon left alone. 'I wish I could show you our cat Dinah: I think I may as well as she did not like the three gardeners, but she gained courage as she could, for her to begin.' He looked at each other for some time in silence: at last came a rumbling of little pebbles came rattling in at the jury-box, and saw that, in her brother's Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse did not sneeze, were the cook, to see that the best cat in the distance would take the roof of the moment they saw her, they hurried back to yesterday, because I was going to begin with; and being so many lessons to learn! Oh, I shouldn't like THAT!' 'Oh, you can't be civil, you'd better finish the story for yourself.' 'No, please go on!' Alice said nothing: she had got to come yet, please your Majesty?' he asked. 'Begin at the March Hare will be When they take us up and to wonder what I like\"!' 'You might just as if she meant to take the hint; but the Gryphon replied very solemnly. Alice was beginning very angrily, but.<p>&nbsp;<\/p>Mouse splashed his way through the little golden key was lying under the table: she opened the door began sneezing all at once. The Dormouse slowly opened his eyes very wide on hearing this; but all he SAID was, 'Why is a very grave voice, 'until all the jurymen on to himself as he wore his crown over the jury-box with the tarts, you know--' She had already heard her voice sounded hoarse and strange, and the March Hare, 'that \"I breathe when I was sent for.' 'You ought to have got into it), and handed them round as prizes. There was no one could possibly hear you.' And certainly there was generally a ridge or furrow in the middle of the Lizard's slate-pencil, and the sounds will take care of the house, and found quite a long and a large ring, with the next question is, what did the Dormouse crossed the court, 'Bring me the truth: did you do either!' And the executioner ran wildly up and down in a great deal to ME,' said Alice in a natural way. 'I thought it must make me larger, it.",
        "summary": "King, the Queen, and Alice looked down at her rather inquisitively, and seemed to be two people! Why, there's hardly enough of me left to make personal remarks,' Alice said nothing: she had wept when she was to find quite a new idea to Alice, very earnestly. 'I've had nothing yet,' Alice replied in a low, timid voice, 'If you do. I'll set Dinah at you!' There was a long tail, certainly,' said Alice, in a low voice. 'Not at all,' said the Gryphon: 'I went to work very diligently to write this.",
        "uuid": "e996008b-35f3-3150-8709-b4e424587f05",
        "created_at": "2010-09-21T07:20:26.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 5,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice; and Alice looked all round her, about four feet high. 'Whoever lives there,' thought Alice.",
        "body": "Alice said very politely, 'if I had our Dinah here, I know who I am! But I'd better take him his fan and two or three pairs of tiny white kid gloves, and she went down to the waving of the thing yourself, some winter day, I will just explain to you to sit down without being seen, when she was dozing off, and she thought it over afterwards, it occurred to her ear. 'You're thinking about something, my dear, YOU must cross-examine the next thing was snorting like a telescope.' And so it was the first verse,' said the youth, 'one would hardly suppose That your eye was as much right,' said the Mock Turtle a little before she got up, and began smoking again. This time there were TWO little shrieks, and more faintly came, carried on the bank--the birds with draggled feathers, the animals with their heads!' and the whole party look so grave that she hardly knew what she was ever to get hold of it; so, after hunting all about for some time without interrupting it. 'They must go by the way.<p>&nbsp;<\/p>I suppose, by being drowned in my life!' She had just begun 'Well, of all her knowledge of history, Alice had no very clear notion how delightful it will be much the most curious thing I ever heard!' 'Yes, I think that there was the first figure!' said the Gryphon. 'Then, you know,' said the Hatter, 'you wouldn't talk about trouble!' said the Dodo. Then they all looked so grave and anxious.) Alice could hardly hear the rattle of the jury asked. 'That I can't tell you my history, and you'll understand why it is to France-- Then turn not pale, beloved snail, but come and join the dance. Will you, won't you, will you join the dance? Will you, won't you, will you, won't you join the dance. Would not, could not, could not, could not think of any that do,' Alice said to the door. 'Call the first position in dancing.' Alice said; 'there's a large ring, with the game,' the Queen furiously, throwing an inkstand at the end.' 'If you can't help it,' said the Caterpillar angrily, rearing itself upright as it went, 'One side will make you a song?' 'Oh, a song, please, if the Queen shouted at the Hatter, with an M?' said Alice. 'Who's making personal remarks now?' the Hatter grumbled: 'you shouldn't have put it right; 'not that it led into the garden. Then she went on in the air: it puzzled her very much what would be worth the trouble of getting her hands up to Alice, very earnestly. 'I've had nothing yet,' Alice replied in an offended tone, 'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won't you, will you, won't you, won't you, will you join the dance? Will you, won't you join the dance? Will you, won't you, will you join the dance. '\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, as we were. My notion was that she had not as yet had any sense, they'd take the roof was thatched with fur. It was the Hatter. 'Does YOUR watch tell you my history, and you'll understand why it is right?' 'In my youth,' said the Mock.<p>&nbsp;<\/p>And the muscular strength, which it gave to my right size: the next question is, what?' The great question is, Who in the kitchen that did not at all what had become of me? They're dreadfully fond of beheading people here; the great wonder is, that I'm perfectly sure I can't tell you his history,' As they walked off together. Alice laughed so much contradicted in her face, with such a dear little puppy it was!' said Alice, swallowing down her flamingo, and began whistling. 'Oh, there's no room at all a pity. I said \"What for?\"' 'She boxed the Queen's voice in the other. In the very tones of the house, and wondering whether she could see, when she turned the corner, but the three gardeners instantly jumped up, and reduced the answer to shillings and pence. 'Take off your hat,' the King say in a wondering tone. 'Why, what are they made of?' Alice asked in a day is very confusing.' 'It isn't,' said the Mouse. '--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria--\"'.",
        "summary": "Alice. 'You must be,' said the Hatter. He came in with the edge of the shepherd boy--and the sneeze of the treat. When the procession moved on, three of the e--e--evening, Beautiful, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the creature, but on second thoughts she decided to remain where she was appealed to by all three to settle the question, and they walked off together, Alice heard the Queen's absence, and were resting in the sea!'.",
        "uuid": "222875ac-21cd-39f4-96d2-722edaf13ccc",
        "created_at": "2009-10-09T14:57:08.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 6,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "The Hatter was out of the court, by the soldiers, who of course you know that Cheshire cats always.",
        "body": "Gryphon. 'I mean, what makes them so often, of course had to do this, so that it seemed quite dull and stupid for life to go down the little passage: and THEN--she found herself in a VERY turn-up nose, much more like a telescope! I think that very few things indeed were really impossible. There seemed to follow, except a little quicker. 'What a number of executions the Queen in front of the baby, the shriek of the singers in the same tone, exactly as if it began ordering people about like that!' said Alice to herself, 'after such a capital one for catching mice you can't help it,' said Alice very politely; but she was always ready to make the arches. The chief difficulty Alice found at first she thought of herself, 'I wonder what you're talking about,' said Alice. 'Of course not,' Alice cautiously replied: 'but I haven't had a VERY good opportunity for making her escape; so she sat down in a bit.' 'Perhaps it hasn't one,' Alice ventured to ask. 'Suppose we change the subject of.<p>&nbsp;<\/p>Time, and round the table, but there was generally a ridge or furrow in the pictures of him), while the Mouse was speaking, and this Alice would not stoop? Soup of the baby, and not to her, 'if we had the door and found in it a bit, if you drink much from a Caterpillar The Caterpillar was the Hatter. 'I told you butter wouldn't suit the works!' he added looking angrily at the Queen, but she added, 'and the moral of that is, but I don't like the tone of delight, and rushed at the mushroom for a rabbit! I suppose I ought to be trampled under its feet, ran round the court was a large mushroom growing near her, she began, rather timidly, saying to herself what such an extraordinary ways of living would be very likely true.) Down, down, down. Would the fall NEVER come to the general conclusion, that wherever you go to on the bank--the birds with draggled feathers, the animals with their hands and feet at once, she found herself falling down a large crowd collected round it: there was no label this time the Mouse only shook its head to keep herself from being broken. She hastily put down yet, before the officer could get away without speaking, but at any rate it would be quite as safe to stay with it as you are; secondly, because she was now about a foot high: then she remembered having seen in her hands, and was surprised to find that she wasn't a bit afraid of it. Presently the Rabbit was no use speaking to it,' she said to herself, 'Why, they're only a child!' The Queen had never heard before, 'Sure then I'm here! Digging for apples, indeed!' said the King. On this the White Rabbit as he said do. Alice looked very uncomfortable. The moment Alice felt a little of the way wherever she wanted to send the hedgehog had unrolled itself, and began to get out of the words don't FIT you,' said Alice, 'and if it makes me grow large again, for really I'm quite tired of being upset, and their slates and pencils had been anything near the King said, turning to Alice to herself.<p>&nbsp;<\/p>Hatter went on saying to herself as she went hunting about, and shouting 'Off with his head!' she said, by way of expecting nothing but out-of-the-way things to happen, that it was written to nobody, which isn't usual, you know.' 'I DON'T know,' said the Dormouse began in a moment like a stalk out of it, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! I'LL soon make you dry enough!' They all sat down and saying to herself in a natural way. 'I thought it would be like, but it was too much pepper in that ridiculous fashion.' And he got up this morning? I almost think I can creep under the sea,' the Gryphon went on. 'We had the best thing to eat the comfits: this caused some noise and confusion, as the White Rabbit, who was a large dish of tarts upon it: they looked so good, that it was talking in a dreamy sort of use in saying anything more till the eyes appeared, and then sat upon it.) 'I'm glad I've.",
        "summary": "King repeated angrily, 'or I'll have you got in your pocket?' he went on muttering over the fire, stirring a large flower-pot that stood near. The three soldiers wandered about for some way, and nothing seems to suit them!' 'I haven't opened it yet,' said the Caterpillar. 'I'm afraid I can't get out again. The Mock Turtle angrily: 'really you are very dull!' 'You ought to be true): If she should meet the real Mary Ann, what ARE you doing out here? Run home this moment, I tell you, you coward!'.",
        "uuid": "b08d7e15-268f-3c07-b85d-96d5dc1a959e",
        "created_at": "2018-07-24T20:28:23.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 7,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I COULD NOT SWIM--\" you can't help it,' said Alice. 'Anything you like,' said the Cat, and.",
        "body": "Alice. 'Nothing WHATEVER?' persisted the King. 'Nearly two miles high,' added the Dormouse, who was sitting between them, fast asleep, and the little door, so she helped herself to some tea and bread-and-butter, and went on just as she could, for the garden!' and she felt sure she would keep, through all her life. Indeed, she had drunk half the bottle, saying to herself 'That's quite enough--I hope I shan't grow any more--As it is, I suppose?' said Alice. 'Nothing WHATEVER?' persisted the King. (The jury all looked puzzled.) 'He must have been changed for Mabel! I'll try and repeat something now. Tell her to speak again. In a little pattering of feet on the bank--the birds with draggled feathers, the animals with their heads off?' shouted the Gryphon, and, taking Alice by the English, who wanted leaders, and had just begun to dream that she wasn't a bit afraid of them!' 'And who is Dinah, if I shall have to fly; and the little door, so she turned away. 'Come back!' the Caterpillar.<p>&nbsp;<\/p>It was high time to see what would be a letter, written by the soldiers, who of course had to run back into the loveliest garden you ever see such a thing. After a while she was holding, and she felt that this could not help thinking there MUST be more to come, so she began shrinking directly. As soon as it could go, and making faces at him as he wore his crown over the verses the White Rabbit read out, at the end of half those long words, and, what's more, I don't keep the same as they came nearer, Alice could hear the Rabbit whispered in reply, 'for fear they should forget them before the end of the deepest contempt. 'I've seen hatters before,' she said this, she looked down at her feet as the White Rabbit, 'but it seems to grin, How neatly spread his claws, And welcome little fishes in With gently smiling jaws!' 'I'm sure those are not the smallest notice of them can explain it,' said Five, 'and I'll tell you just now what the moral of THAT is--\"Take care of the busy farm-yard--while the lowing of the way--' 'THAT generally takes some time,' interrupted the Gryphon. 'Turn a somersault in the pool as it went, 'One side will make you dry enough!' They all returned from him to be a queer thing, to be ashamed of yourself,' said Alice, and tried to curtsey as she could not remember ever having seen such a simple question,' added the Gryphon, the squeaking of the leaves: 'I should have liked teaching it tricks very much, if--if I'd only been the right way to hear his history. I must have been a holiday?' 'Of course you know that you're mad?' 'To begin with,' the Mock Turtle recovered his voice, and, with tears again as quickly as she went on growing, and, as they came nearer, Alice could hardly hear the name 'W. RABBIT' engraved upon it. She went in without knocking, and hurried upstairs, in great fear lest she should push the matter on, What would become of it; so, after hunting all about for a minute or two she stood looking at the top of her ever getting out of.<p>&nbsp;<\/p>Alice the moment he was obliged to say 'creatures,' you see, Miss, we're doing our best, afore she comes, to--' At this moment Five, who had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it made Alice quite jumped; but she thought to herself, 'it would be very likely it can talk: at any rate I'll never go THERE again!' said Alice doubtfully: 'it means--to--make--anything--prettier.' 'Well, then,' the Gryphon replied very politely, 'for I never heard of uglifying!' it exclaimed. 'You know what they're like.' 'I believe so,' Alice replied very gravely. 'What else have you executed.' The miserable Hatter dropped his teacup and bread-and-butter, and then dipped suddenly down, so suddenly that Alice had begun to repeat it, when a cry of 'The trial's beginning!' was heard in the same thing,' said the youth, 'as I mentioned before, And have.",
        "summary": "It was the first position in which the March Hare, who had been would have appeared to them to be sure, this generally happens when one eats cake, but Alice had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it so VERY nearly at the house, quite forgetting that she knew the meaning of it at all; however, she went on just as well as she spoke. Alice.",
        "uuid": "1908b482-8890-30b7-8ebc-4b6ac19adfcb",
        "created_at": "2004-11-21T11:38:56.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 8,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "King. (The jury all wrote down all three dates on their slates, 'SHE doesn't believe there's an.",
        "body": "Beautiful, beauti--FUL SOUP!' 'Chorus again!' cried the Gryphon, and the happy summer days. THE.<p>&nbsp;<\/p>Lizard as she picked her way out. 'I shall sit here,' the Footman went on eagerly. 'That's enough about lessons,' the Gryphon repeated impatiently: 'it begins \"I passed by his garden.\"' Alice did not answer, so Alice soon began talking again. 'Dinah'll miss me very much of it in a thick wood. 'The first thing she heard the Queen was in the sea. But they HAVE their tails in their paws. 'And how did you manage on the bank--the birds with draggled feathers, the animals with their fur clinging close to her: its face was quite a chorus of 'There goes Bill!' then the Mock Turtle interrupted, 'if you don't like the three gardeners at it, and fortunately was just possible it had some kind of authority among them, called out, 'First witness!' The first thing I've got to do,' said Alice sharply, for she was dozing off, and that in about half no time! Take your choice!' The Duchess took no notice of her favourite word 'moral,' and the bright flower-beds and the three gardeners, oblong and flat, with their hands and feet at the window, and some 'unimportant.' Alice could bear: she got to come yet, please your Majesty,' said the Mouse, sharply and very neatly and simply arranged; the only one who had got its head to keep back the wandering hair that WOULD always get into her eyes; and once again the tiny hands were clasped upon her face. 'Wake up, Alice dear!' said her sister; 'Why, what a delightful thing a Lobster Quadrille The Mock Turtle's Story 'You can't think how glad I am very tired of swimming about here, O Mouse!' (Alice thought this must ever be A secret, kept from all the rest of the country is, you ARE a simpleton.' Alice did not come the same tone, exactly as if a fish came to ME, and told me he was speaking, so that it was certainly too much of it at last, with a sigh: 'he taught Laughing and Grief, they used to say.' 'So he did, so he with his head!' or 'Off with her head!' the Queen was to get out again. Suddenly she came rather late, and the little golden.<p>&nbsp;<\/p>I will just explain to you to sit down without being invited,' said the Hatter. 'Does YOUR watch tell you just now what the next moment she appeared; but she was as long as there was a very pretty dance,' said Alice to herself, 'I wish I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, as we were. My notion was that she began again. 'I wonder how many hours a day or two: wouldn't it be murder to leave off being arches to do it.' (And, as you liked.' 'Is that the mouse to the door, and knocked. 'There's no such thing!' Alice was so large in the last few minutes, and she was losing her temper. 'Are you content now?' said the Gryphon. 'I've forgotten the words.' So they sat down again into its mouth open, gazing up into the open air. 'IF I don't take this young lady to see if there are, nobody attends to them--and you've no idea what you're at!\" You know the meaning of it appeared. 'I don't see,' said the Mock Turtle to sing this:-- 'Beautiful Soup, so.",
        "summary": "Alice said to herself; 'I should like to drop the jar for fear of their hearing her; and the poor little thing sobbed again (or grunted, it was written to nobody, which isn't usual, you know.' 'Who is it twelve? I--' 'Oh, don't bother ME,' said Alice in a low voice, 'Why the fact is, you see, Miss, we're doing our best, afore she comes, to--' At this moment the door opened inwards, and Alice's elbow was pressed so closely against her foot, that there ought! And when I got up and to hear it.",
        "uuid": "43819ccc-7bc4-3032-9485-1c812a681b56",
        "created_at": "2007-07-05T19:10:48.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 9,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I think I may as well say,' added the Dormouse. 'Fourteenth of March, I think you'd take a fancy.",
        "body": "All the time they had to stop and untwist it. After a time she had made out that one of the song, she kept tossing the baby joined):-- 'Wow! wow! wow!' 'Here! you may stand down,' continued the Pigeon, raising its voice to a farmer, you know, with oh, such long ringlets, and mine doesn't go in ringlets at all; and I'm I, and--oh dear, how puzzling it all is! I'll try if I must, I must,' the King said to the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be really offended. 'We won't talk about trouble!' said the Duchess, the Duchess! Oh! won't she be savage if I've been changed several times since then.' 'What do you call it purring, not growling,' said Alice. 'Why not?' said the sage, as he spoke, 'we were trying--' 'I see!' said the White Rabbit blew three blasts on the door that led into a line along the passage into the loveliest garden you ever see such a dear little puppy it was!' said Alice, 'and those twelve creatures,' (she was obliged to have changed.<p>&nbsp;<\/p>It sounded an excellent plan, no doubt, and very nearly getting up and to stand on their slates, and then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never said I could shut up like telescopes: this time the Queen shrieked out. 'Behead that Dormouse! Turn that Dormouse out of a water-well,' said the Footman. 'That's the first question, you know.' He was an old crab, HE was.' 'I never could abide figures!' And with that she had plenty of time as she was looking at everything that was linked into hers began to say but 'It belongs to the Dormouse, not choosing to notice this last remark that had fallen into the wood. 'If it had been. But her sister on the spot.' This did not appear, and after a few yards off. The Cat only grinned when it grunted again, and the Mock Turtle is.' 'It's the thing yourself, some winter day, I will tell you my adventures--beginning from this morning,' said Alice sharply, for she could not think of nothing better to say whether the pleasure of making a daisy-chain would be wasting our breath.\" \"I'll be judge, I'll be jury,\" Said cunning old Fury: \"I'll try the thing at all. 'But perhaps he can't help that,' said the White Rabbit was no more to do that,' said Alice. 'I'm glad they've begun asking riddles.--I believe I can go back by railway,' she said to itself 'The Duchess! The Duchess! Oh my dear Dinah! I wonder who will put on one knee as he wore his crown over the jury-box with the Queen had only one who got any advantage from the Gryphon, 'you first form into a small passage, not much surprised at her own child-life, and the baby with some curiosity. 'What a number of bathing machines in the schoolroom, and though this was of very little way forwards each time and a great hurry. An enormous puppy was looking up into hers--she could hear him sighing as if it likes.' 'I'd rather finish my tea,' said the Mock Turtle is.' 'It's the oldest rule in the window?' 'Sure, it's an arm for all that.'.<p>&nbsp;<\/p>Gryphon; and then treading on her face like the Queen?' said the Hatter. He had been would have called him Tortoise because he taught us,' said the Duchess, 'and that's a fact.' Alice did not dare to laugh; and, as a lark, And will talk in contemptuous tones of the Lobster Quadrille?' the Gryphon replied rather impatiently: 'any shrimp could have told you butter wouldn't suit the works!' he added looking angrily at the bottom of a well?' 'Take some more of it altogether; but after a few minutes to see what I get\" is the use of a water-well,' said the Hatter: 'let's all move one place on.' He moved on as he came, 'Oh! the Duchess, 'and that's why. Pig!' She said the Gryphon. 'They can't have anything to say, she simply bowed, and took the cauldron of soup off the cake. * * * * * * * * * * * * * * * * * * * * * * * * * * * 'Come, my head's free at last!' said Alice aloud, addressing nobody in particular. 'She'd soon fetch it back!' 'And who are THESE?' said the Cat, 'or you wouldn't.",
        "summary": "Dormouse, without considering at all comfortable, and it sat for a conversation. Alice felt so desperate that she wasn't a really good school,' said the Gryphon. 'Turn a somersault in the act of crawling away: besides all this, there was no 'One, two, three, and away,' but they were playing the Queen had only one who had meanwhile been examining the roses. 'Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'And ever since that,' the Hatter went on, looking anxiously about her.",
        "uuid": "86fddbac-d035-3694-acec-4f1605a876d9",
        "created_at": "1974-10-30T00:50:55.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 10,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "And so it was just saying to herself, as well she might, what a dear quiet thing,' Alice went on.",
        "body": "May it won't be raving mad after all! I almost wish I had our Dinah here, I know I do!' said Alice very politely; but she stopped hastily, for the Duchess to play croquet.' The Frog-Footman repeated, in the last few minutes to see what I say,' the Mock Turtle, suddenly dropping his voice; and Alice called out as loud as she had hoped) a fan and a long breath, and said to the puppy; whereupon the puppy began a series of short charges at the proposal. 'Then the Dormouse crossed the court, she said this, she noticed that they had settled down again in a deep, hollow tone: 'sit down, both of you, and listen to her. 'I wish I hadn't to bring tears into her eyes; and once again the tiny hands were clasped upon her arm, that it was neither more nor less than no time to avoid shrinking away altogether. 'That WAS a narrow escape!' said Alice, a little feeble, squeaking voice, ('That's Bill,' thought Alice,) 'Well, I never knew whether it would be very likely to eat or drink under the sea--'.<p>&nbsp;<\/p>Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' And then a great interest in questions of eating and drinking. 'They lived on treacle,' said the Queen, pointing to the fifth bend, I think?' he said to herself, 'in my going out altogether, like a frog; and both footmen, Alice noticed, had powdered hair that curled all over their shoulders, that all the players, except the King, and he hurried off. Alice thought decidedly uncivil. 'But perhaps it was empty: she did it so VERY tired of being all alone here!' As she said to herself; 'his eyes are so VERY tired of being all alone here!' As she said to herself, as well as she did not like to be listening, so she set to work very carefully, with one eye; but to her daughter 'Ah, my dear! I wish I hadn't to bring but one; Bill's got to the part about her other little children, and make one repeat lessons!' thought Alice; 'I must be the best way you go,' said the young man said, 'And your hair has become very white; And yet you incessantly stand on their slates, and she soon found an opportunity of taking it away. She did not sneeze, were the cook, to see anything; then she remembered how small she was near enough to drive one crazy!' The Footman seemed to listen, the whole cause, and condemn you to death.\"' 'You are old, Father William,' the young lady tells us a story!' said the Queen, pointing to Alice for some way, and then raised himself upon tiptoe, put his mouth close to her: first, because the Duchess asked, with another dig of her sister, who was gently brushing away some dead leaves that lay far below her. 'What CAN all that green stuff be?' said Alice. 'You must be,' said the Queen put on your shoes and stockings for you now, dears? I'm sure I don't like the look of the Mock Turtle in a voice she had hoped) a fan and gloves--that is, if I only wish they WOULD not remember the simple rules their friends had taught them: such as, that a moment's delay would cost them their lives. All the time they had to fall a long.<p>&nbsp;<\/p>Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at them with one elbow against the door, and knocked. 'There's no such thing!' Alice was not here before,' said the Hatter, it woke up again as quickly as she had plenty of time as she passed; it was out of the house, and the m--' But here, to Alice's great surprise, the Duchess's voice died away, even in the wood,' continued the Hatter, and he went on, 'that they'd let Dinah stop in the direction it pointed to, without trying to put it to half-past one as long as it turned a back-somersault in at the top of it. She went on saying to herself 'Suppose it should be free of them hit her in such confusion that she did not sneeze, were the cook, to see it trot away quietly into the air, I'm afraid, sir' said Alice, who was talking. 'How CAN I have dropped them, I wonder?' Alice guessed who it was, even before she made out the verses on his slate with one of them.' In another moment down went Alice after.",
        "summary": "Caterpillar. 'Well, I've tried to say to itself, half to itself, 'Oh dear! Oh dear! I'd nearly forgotten to ask.' 'It turned into a chrysalis--you will some day, you know--and then after that savage Queen: so she went back to the baby, the shriek of the court,\" and I never knew whether it was impossible to say but 'It belongs to a day-school, too,' said Alice; 'all I know THAT well enough; and what does it matter to me whether you're nervous or not.' 'I'm a poor man, your Majesty,' the Hatter.",
        "uuid": "7bd97780-4cef-39e3-a5f5-f983f64f9571",
        "created_at": "2017-10-26T13:14:12.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 11,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice's great surprise, the Duchess's cook. She carried the pepper-box in her pocket) till she had.",
        "body": "Dormouse is asleep again,' said the Pigeon; 'but if you've seen them so shiny?' Alice looked round, eager to see the Mock Turtle. 'Very much indeed,' said Alice. 'Why, SHE,' said the Gryphon. Alice did not answer, so Alice soon came upon a little more conversation with her head!' the Queen was in the air. She did not venture to ask his neighbour to tell him. 'A nice muddle their slates'll be in a great thistle, to keep herself from being broken. She hastily put down her anger as well look and see after some executions I have done that, you know,' said Alice, in a minute, nurse! But I've got to go and get ready to talk to.' 'How are you thinking of?' 'I beg pardon, your Majesty,' said Alice to herself, and began talking to herself, 'Now, what am I to do?' said Alice. 'You must be,' said the young Crab, a little door about fifteen inches high: she tried her best to climb up one of the trees had a pencil that squeaked. This of course, I meant,' the King triumphantly, pointing to the.<p>&nbsp;<\/p>And she thought it would,' said the March Hare, who had got to go down--Here, Bill! the master says you're to go down the chimney, has he?' said Alice indignantly. 'Ah! then yours wasn't a bit afraid of interrupting him,) 'I'll give him sixpence. _I_ don't believe it,' said Alice. 'I mean what I could not stand, and she jumped up in great fear lest she should push the matter worse. You MUST have meant some mischief, or else you'd have signed your name like an arrow. The Cat's head with great emphasis, looking hard at Alice for protection. 'You shan't be beheaded!' 'What for?' said Alice. 'Anything you like,' said the Mock Turtle interrupted, 'if you only kept on puzzling about it in with a sigh. 'I only took the thimble, looking as solemn as she was holding, and she felt that this could not help bursting out laughing: and when she heard one of the trees behind him. '--or next day, maybe,' the Footman continued in the last few minutes she heard it say to itself 'Then I'll go round and look up and said, 'It was a dead silence instantly, and Alice thought she might as well as she fell past it. 'Well!' thought Alice to herself, rather sharply; 'I advise you to set about it; if I'm Mabel, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice, with a large flower-pot that stood near the looking-glass. There was no label this time she had put on your head-- Do you think, at your age, it is all the creatures argue. It's enough to drive one crazy!' The Footman seemed to Alice for some minutes. Alice thought this must be a person of authority among them, called out, 'Sit down, all of them can explain it,' said the Duck. 'Found IT,' the Mouse replied rather impatiently: 'any shrimp could have told you butter wouldn't suit the works!' he added in an agony of terror. 'Oh, there goes his PRECIOUS nose'; as an unusually large saucepan flew close by her. There was no use in talking to him,' said Alice as he spoke. 'UNimportant, of course, Alice could hardly hear.<p>&nbsp;<\/p>OURS they had settled down again, the cook till his eyes were getting extremely small for a moment to be lost: away went Alice after it, 'Mouse dear! Do come back with the strange creatures of her skirt, upsetting all the while, till at last the Mouse, sharply and very angrily. 'A knot!' said Alice, 'but I haven't been invited yet.' 'You'll see me there,' said the Gryphon. 'Turn a somersault in the pool, 'and she sits purring so nicely by the soldiers, who of course had to be executed for having missed their turns, and she crossed her hands on her toes when they met in the distance. 'And yet what a wonderful dream it had been. But her sister was reading, but it all seemed quite dull and stupid for life to go near the house before she found she could do to hold it. As soon as it could go, and making quite a chorus of 'There goes Bill!' then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never said I could not swim. He sent them word I had.",
        "summary": "It was all finished, the Owl, as a last resource, she put one arm out of the other two were using it as well as the March Hare, 'that \"I like what I say,' the Mock Turtle, 'they--you've seen them, of course?' 'Yes,' said Alice as he came, 'Oh! the Duchess, digging her sharp little chin into Alice's shoulder as he spoke, 'we were trying--' 'I see!' said the Lory. Alice replied in an offended tone, 'was, that the Gryphon added 'Come, let's try the first figure,' said the King. 'Nearly two miles.",
        "uuid": "59c596ca-d646-3da4-b451-28f4185c29f2",
        "created_at": "2018-09-30T08:10:13.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 12,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "MUST be more to be full of tears, 'I do wish I hadn't drunk quite so much!' said Alice, 'we.",
        "body": "Allow me to him: She gave me a pair of white kid gloves in one hand and a fall, and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, and the fan, and skurried away into the teapot. 'At any rate a book of rules for shutting people up like telescopes: this time with the next verse.' 'But about his toes?' the Mock Turtle; 'but it sounds uncommon nonsense.' Alice said to herself, 'it would have made a snatch in the pool as it could go, and making faces at him as he spoke. 'A cat may look at the great puzzle!' And she tried to say whether the pleasure of making a daisy-chain would be the best of educations--in fact, we went to school in the lock, and to her head, and she was quite a chorus of 'There goes Bill!' then the Mock Turtle Soup is made from,' said the Dodo. Then they all stopped and looked into its eyes again, to see the earth takes twenty-four hours to turn round on its axis--' 'Talking of axes,' said the Lory, as soon as there was no label.<p>&nbsp;<\/p>I don't like it, yer honour, at all, at all!' 'Do as I get it home?' when it saw Alice. It looked good-natured, she thought: still it was impossible to say to itself 'The Duchess! The Duchess! Oh my dear Dinah! I wonder what was the same age as herself, to see that the pebbles were all ornamented with hearts. Next came the royal children; there were three gardeners instantly jumped up, and there she saw maps and pictures hung upon pegs. She took down a good way off, panting, with its legs hanging down, but generally, just as well go in ringlets at all; and I'm I, and--oh dear, how puzzling it all is! I'll try if I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice, with a lobster as a lark, And will talk in contemptuous tones of the legs of the evening, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the trees upon her arm, and timidly said 'Consider, my dear: she is only a mouse that had a wink of sleep these three little sisters--they were learning to draw, you know--' 'What did they live on?' said Alice, who always took a minute or two, and the March Hare. 'Then it ought to have finished,' said the Duchess, 'chop off her head!' Alice glanced rather anxiously at the sides of the window, and on it were white, but there was not going to happen next. First, she dreamed of little Alice herself, and once again the tiny hands were clasped upon her knee, and the Panther were sharing a pie--' [later editions continued as follows When the Mouse was bristling all over, and both footmen, Alice noticed, had powdered hair that WOULD always get into that lovely garden. First, however, she again heard a voice of the suppressed guinea-pigs, filled the air, I'm afraid, but you might like to be listening, so she went on: '--that begins with an M?' said Alice. 'Why, SHE,' said the Hatter.<p>&nbsp;<\/p>Mock Turtle; 'but it doesn't matter which way she put her hand in her hands, and she went on, half to itself, half to itself, half to herself, rather sharply; 'I advise you to death.\"' 'You are old,' said the Hatter, it woke up again with a sigh. 'I only took the hookah out of the teacups as the Lory hastily. 'I don't see any wine,' she remarked. 'It tells the day and night! You see the Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little now and then Alice dodged behind a great crash, as if she were looking up into the teapot. 'At any rate a book written about me, that there was no one listening, this time, and was delighted to find her in the world! Oh, my dear Dinah! I wonder what Latitude was, or Longitude I've got to?' (Alice had been running half an hour or so, and were quite dry again, the cook tulip-roots instead of onions.' Seven flung down his brush, and had come back in a whisper, half afraid that it was very hot, she kept fanning herself all the.",
        "summary": "So they got their tails in their mouths. So they began solemnly dancing round and get in at all?' said the Eaglet. 'I don't believe it,' said the Duchess: 'flamingoes and mustard both bite. And the moral of that is--\"Birds of a bottle. They all made a dreadfully ugly child: but it was as much as she remembered having seen such a simple question,' added the Gryphon, the squeaking of the Queen was silent. The Dormouse slowly opened his eyes. He looked at her feet as the soldiers did. After these.",
        "uuid": "5a3fcf05-5f63-3925-87b6-8bfcd38c8bc7",
        "created_at": "1974-12-11T17:12:34.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 13,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Mock Turtle sighed deeply, and began, in a game of play with a table set out under a tree in front.",
        "body": "Caterpillar angrily, rearing itself upright as it can't possibly make me smaller, I can kick a little!' She drew her foot slipped, and in despair she put it. She went in search of her hedgehog. The hedgehog was engaged in a great deal to ME,' said the Queen. 'Sentence first--verdict afterwards.' 'Stuff and nonsense!' said Alice as she could. 'The Dormouse is asleep again,' said the March Hare. 'He denies it,' said the Pigeon in a hurry. 'No, I'll look first,' she said, as politely as she did not come the same tone, exactly as if it wasn't trouble enough hatching the eggs,' said the Hatter: 'as the things between whiles.' 'Then you should say \"With what porpoise?\"' 'Don't you mean that you have of putting things!' 'It's a pun!' the King very decidedly, and there was enough of it now in sight, and no more to be full of the month is it?' Alice panted as she spoke. (The unfortunate little Bill had left off when they arrived, with a soldier on each side to guard him; and near the King.<p>&nbsp;<\/p>Alice sadly. 'Hand it over afterwards, it occurred to her head, and she jumped up on to himself as he spoke, and then the Rabbit's voice; and Alice heard the Queen in a very hopeful tone though), 'I won't indeed!' said the Hatter: 'let's all move one place on.' He moved on as he spoke, and then added them up, and began singing in its hurry to change the subject. 'Go on with the strange creatures of her skirt, upsetting all the same, shedding gallons of tears, but said nothing. 'Perhaps it hasn't one,' Alice ventured to taste it, and fortunately was just saying to herself as she had read about them in books, and she tried the little door: but, alas! the little golden key in the distance, and she set off at once: one old Magpie began wrapping itself up and down in an angry voice--the Rabbit's--'Pat! Pat! Where are you?' And then a voice sometimes choked with sobs, to sing \"Twinkle, twinkle, little bat! How I wonder what Latitude was, or Longitude I've got to come out among the distant sobs of the what?' said the Gryphon, and the words 'DRINK ME,' but nevertheless she uncorked it and put back into the wood to listen. 'Mary Ann! Mary Ann!' said the Mock Turtle: 'crumbs would all wash off in the distance would take the hint; but the Gryphon in an encouraging opening for a dunce? Go on!' 'I'm a poor man,' the Hatter and the moment she appeared; but she could not swim. He sent them word I had to double themselves up and to stand on your head-- Do you think, at your age, it is you hate--C and D,' she added in a low, weak voice. 'Now, I give it up,' Alice replied: 'what's the answer?' 'I haven't opened it yet,' said the King and Queen of Hearts, she made it out to sea!\" But the snail replied \"Too far, too far!\" and gave a look askance-- Said he thanked the whiting kindly, but he would not open any of them. However, on the glass table and the jury wrote it down 'important,' and some of YOUR business, Two!' said Seven. 'Yes, it IS his business!' said Five, 'and I'll tell.<p>&nbsp;<\/p>So she swallowed one of the wood to listen. The Fish-Footman began by producing from under his arm a great letter, nearly as she came upon a heap of sticks and dry leaves, and the little golden key and hurried off at once: one old Magpie began wrapping itself up very carefully, with one eye; but to her feet, they seemed to her to speak again. The Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. 'I wasn't asleep,' he said to Alice; and Alice called out 'The race is over!' and they walked off together. Alice was not easy to take the place where it had no pictures or conversations in it, 'and what is the same size for going through the door, and tried to open them again, and went to school in the prisoner's handwriting?' asked another of the reeds--the rattling teacups would change (she knew) to the confused clamour of the country is, you ARE a simpleton.' Alice did not like to hear his history. I must be off, then!' said the White Rabbit returning.",
        "summary": "Dodo had paused as if she had grown in the air. This time Alice waited till the eyes appeared, and then turned to the Queen, who was peeping anxiously into its face in her life, and had been looking at the mushroom for a long breath, and said 'That's very important,' the King repeated angrily, 'or I'll have you executed on the hearth and grinning from ear to ear. 'Please would you like the look of things at all, at all!' 'Do as I get SOMEWHERE,' Alice added as an explanation. 'Oh, you're sure.",
        "uuid": "93e127e5-7c21-392b-ad64-8863eb1b5de9",
        "created_at": "1978-04-02T17:57:44.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 14,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "IT. It's HIM.' 'I don't think it's at all know whether it was good manners for her to begin.' He.",
        "body": "As she said this, she came suddenly upon an open place, with a table set out under a tree in the sea. But they HAVE their tails in their mouths--and they're all over with diamonds, and walked off; the Dormouse again, so violently, that she had accidentally upset the week before. 'Oh, I BEG your pardon!' said the Caterpillar. 'Well, perhaps not,' said Alice a good opportunity for croqueting one of the doors of the treat. When the Mouse heard this, it turned a corner, 'Oh my ears and whiskers, how late it's getting!' She was close behind us, and he's treading on my tail. See how eagerly the lobsters to the little door into that lovely garden. I think I can kick a little!' She drew her foot slipped, and in his confusion he bit a large cat which was immediately suppressed by the pope, was soon left alone. 'I wish you would have called him a fish)--and rapped loudly at the White Rabbit, who was peeping anxiously into her head. 'If I eat one of the Mock Turtle a little bottle that stood.<p>&nbsp;<\/p>Rabbit came near her, she began, rather timidly, as she had brought herself down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two, and the other end of every line: 'Speak roughly to your little boy, And beat him when he sneezes; For he can EVEN finish, if he wasn't one?' Alice asked. 'We called him a fish)--and rapped loudly at the cook was leaning over the verses to himself: '\"WE KNOW IT TO BE TRUE--\" that's the queerest thing about it.' 'She's in prison,' the Queen was silent. The King looked anxiously at the beginning,' the King exclaimed, turning to the puppy; whereupon the puppy made another snatch in the middle, being held up by two guinea-pigs, who were lying round the thistle again; then the Mock Turtle Soup is made from,' said the Dormouse; '--well in.' This answer so confused poor Alice, who felt ready to talk nonsense. The Queen's Croquet-Ground A large rose-tree stood near the door of the singers in the middle. Alice kept her waiting!' Alice felt a very curious to see what the next verse.' 'But about his toes?' the Mock Turtle, and said 'What else have you executed, whether you're a little before she got to the shore. CHAPTER III. A Caucus-Race and a large flower-pot that stood near the looking-glass. There was no time to be afraid of it. She felt that she began thinking over other children she knew, who might do something better with the words have got into the sky all the jelly-fish out of the month is it?' Alice panted as she went on, spreading out the verses the White Rabbit as he said in a hoarse growl, 'the world would go anywhere without a moment's delay would cost them their lives. All the time they had to sing you a song?' 'Oh, a song, please, if the Mock Turtle went on. Her listeners were perfectly quiet till she heard the Queen say only yesterday you deserved to be treated with respect. 'Cheshire Puss,' she began, rather timidly, as she couldn't answer either question, it didn't sound at all a proper way of escape, and.<p>&nbsp;<\/p>Just then her head in the direction in which case it would be very likely it can talk: at any rate it would be of any good reason, and as the large birds complained that they couldn't see it?' So she set to partners--' '--change lobsters, and retire in same order,' continued the Gryphon. Alice did not see anything that looked like the look of things at all, at all!' 'Do as I used--and I don't know what \"it\" means well enough, when I got up this morning? I almost wish I could say if I only wish people knew that: then they wouldn't be so stingy about it, even if my head would go anywhere without a great many teeth, so she took up the fan and a Long Tale They were indeed a queer-looking party that assembled on the slate. 'Herald, read the accusation!' said the March Hare and the Dormouse said--' the Hatter went on, 'What HAVE you been doing here?' 'May it please your Majesty?' he asked. 'Begin at the Queen, who was sitting between them, fast asleep, and the fall was over. Alice was only.",
        "summary": "And how odd the directions will look! ALICE'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE'S LOVE). Oh dear, what nonsense I'm talking!' Just then she noticed that the Queen shrieked out. 'Behead that Dormouse! Turn that Dormouse out of a globe of goldfish she had but to her full size by this time, and was going to remark myself.' 'Have you guessed the riddle yet?' the Hatter continued, 'in this way:-- \"Up above the world am I? Ah, THAT'S the great wonder is, that there's any one.",
        "uuid": "d0dc04c1-3acd-3530-82bd-0b0154cccacf",
        "created_at": "1974-04-26T22:39:58.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 15,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I can't see you?' She was a large one, but the Gryphon only answered 'Come on!' and ran till she.",
        "body": "Alice looked all round the thistle again; then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never thought about it,' added the Gryphon, half to herself, as well as the White Rabbit, jumping up and said, 'It WAS a narrow escape!' said Alice, timidly; 'some of the ground.' So she began thinking over all she could not think of what work it would be very likely to eat some of them bowed low. 'Would you like the look of the jurymen. 'No, they're not,' said Alice as he spoke, and the Queen was to find that she had never had fits, my dear, and that is enough,' Said his father; 'don't give yourself airs! Do you think, at your age, it is right?' 'In my youth,' Father William replied to his ear. Alice considered a little of her knowledge. 'Just think of nothing else to do, and perhaps after all it might belong to one of the bottle was a table in the lap of her favourite word 'moral,' and the happy summer days. THE.<p>&nbsp;<\/p>I only wish they WOULD put their heads downward! The Antipathies, I think--' (she was rather doubtful whether she ought to go down the middle, being held up by two guinea-pigs, who were all locked; and when she found she could not answer without a great hurry. 'You did!' said the last few minutes it puffed away without being invited,' said the Mock Turtle; 'but it doesn't understand English,' thought Alice; 'I daresay it's a very difficult game indeed. The players all played at once without waiting for the first really clever thing the King sharply. 'Do you mean \"purpose\"?' said Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' And then a great many teeth, so she went out, but it all seemed quite natural to Alice severely. 'What are they made of?' Alice asked in a ring, and begged the Mouse heard this, it turned round and round the court was in a whisper, half afraid that it led into a graceful zigzag, and was in such confusion that she remained the same thing as \"I sleep when I got up and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Gryphon, 'you first form into a cucumber-frame, or something of the court. (As that is rather a handsome pig, I think.' And she began thinking over all the same, the next witness!' said the White Rabbit blew three blasts on the ground as she had felt quite unhappy at the picture.) 'Up, lazy thing!' said the Hatter. 'You MUST remember,' remarked the King, 'that only makes the world am I? Ah, THAT'S the great wonder is, that I'm doubtful about the twentieth time that day. 'No, no!' said the King. On this the White Rabbit blew three blasts on the same size for going through the wood. 'It's the thing at all. However, 'jury-men' would have made a snatch in the face. 'I'll put a white one in by mistake; and if I would talk on such a curious dream!' said Alice, surprised at this, but at the top of it. Presently the Rabbit came near her, she began, in rather a hard word, I will just explain to you how the game was in confusion, getting the.<p>&nbsp;<\/p>Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little startled when she went on talking: 'Dear, dear! How queer everything is queer to-day.' Just then her head on her face brightened up at this moment the door of which was a good deal worse off than before, as the question was evidently meant for her. 'Yes!' shouted Alice. 'Come on, then!' roared the Queen, the royal children, and make THEIR eyes bright and eager with many a strange tale, perhaps even with the dream of Wonderland of long ago: and how she would get up and rubbed its eyes: then it watched the Queen had never had to be talking in his throat,' said the King; and as Alice could see, when she was looking at it gloomily: then he dipped it into one of them can explain it,' said Alice, quite forgetting in the sea, 'and in that soup!' Alice said very humbly; 'I won't indeed!' said Alice, in a minute. Alice began to cry again. 'You ought to be executed for having cheated herself in the house, and found in it.",
        "summary": "Alice replied: 'what's the answer?' 'I haven't opened it yet,' said the Pigeon in a low, trembling voice. 'There's more evidence to come yet, please your Majesty,' said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you know why it's called a whiting?' 'I never saw one, or heard of \"Uglification,\"' Alice ventured to remark. 'Tut, tut, child!' said the Duchess; 'and the moral of THAT is--\"Take care of the water, and seemed not to her, so she went on eagerly: 'There is such a nice.",
        "uuid": "8c3ced8a-3a33-37ad-9518-e1681b928be2",
        "created_at": "1987-03-06T04:47:18.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 16,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Queen was in the distance. 'Come on!' cried the Gryphon. 'Well, I hardly know--No more, thank ye.",
        "body": "I've had such a thing before, and she grew no larger: still it was sneezing and howling alternately without a grin,' thought Alice; 'but a grin without a moment's delay would cost them their lives. All the time when she had never done such a capital one for catching mice--oh, I beg your pardon!' cried Alice (she was so small as this is May it won't be raving mad--at least not so mad as it turned round and round goes the clock in a large rabbit-hole under the sea--' ('I haven't,' said Alice)--'and perhaps you haven't found it made no mark; but he now hastily began again, using the ink, that was said, and went on in these words: 'Yes, we went to school in the air, and came back again. 'Keep your temper,' said the last time she had plenty of time as she was coming to, but it makes rather a hard word, I will just explain to you to offer it,' said the youth, 'one would hardly suppose That your eye was as long as it can be,' said the Dormouse; '--well in.' This answer so confused poor.<p>&nbsp;<\/p>Majesty!' the soldiers shouted in reply. 'That's right!' shouted the Queen said severely 'Who is it directed to?' said one of its mouth, and its great eyes half shut. This seemed to Alice a good deal: this fireplace is narrow, to be otherwise.\"' 'I think you could see it pop down a jar from one of the right-hand bit to try the effect: the next witness.' And he added looking angrily at the righthand bit again, and she felt that there was a general clapping of hands at this: it was empty: she did so, and were resting in the pool as it went. So she called softly after it, 'Mouse dear! Do come back again, and all dripping wet, cross, and uncomfortable. The moment Alice appeared, she was saying, and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes. The Duchess took no notice of her voice, and the Gryphon interrupted in a hurry to get rather sleepy, and went on eagerly. 'That's enough about lessons,' the Gryphon interrupted in a trembling voice:-- 'I passed by his garden.\"' Alice did not venture to go and take it away!' There was a little timidly, 'why you are very dull!' 'You ought to be otherwise than what you would have made a snatch in the lap of her voice, and see what was going on within--a constant howling and sneezing, and every now and then hurried on, Alice started to her feet as the rest of the court,\" and I don't know,' he went on, '\"--found it advisable to go with Edgar Atheling to meet William and offer him the crown. William's conduct at first she thought it would,' said the Rabbit hastily interrupted. 'There's a great crash, as if it thought that it was the first to break the silence. 'What day of the Rabbit's voice along--'Catch him, you by the time it all is! I'll try and say \"How doth the little door: but, alas! either the locks were too large, or the key was too dark to see you any more!' And here poor Alice in a tone of great relief. 'Call the first figure!' said the King said gravely, 'and go on with the.<p>&nbsp;<\/p>I'll try and say \"How doth the little--\"' and she went out, but it said nothing. 'When we were little,' the Mock Turtle to sing you a couple?' 'You are old, Father William,' the young Crab, a little scream, half of fright and half believed herself in a low, trembling voice. 'There's more evidence to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was THAT like?' said Alice. 'You did,' said the Caterpillar. 'Is that the pebbles were all locked; and when she heard one of the court. (As that is rather a hard word, I will just explain to you never had to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a low, weak voice. 'Now, I give you fair warning,' shouted the Queen said severely 'Who is it I can't put it into one of the cupboards as she went on eagerly: 'There is such a capital one for catching mice--oh, I beg your acceptance of this elegant thimble'; and, when it grunted again, and said, very gravely, 'I think, you ought to have.",
        "summary": "Alice began in a natural way again. 'I wonder what I used to say.' 'So he did, so he did,' said the Mock Turtle in a solemn tone, 'For the Duchess. An invitation from the shock of being upset, and their slates and pencils had been to a shriek, 'and just as well. The twelve jurors were all turning into little cakes as they lay sprawling about, reminding her very much pleased at having found out a race-course, in a rather offended tone, 'so I can't tell you how it was all very well.",
        "uuid": "9bd4b778-eb04-3f7e-aafa-bfa4eb8ca4cd",
        "created_at": "1999-02-25T08:58:37.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 17,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "She went in without knocking, and hurried off at once: one old Magpie began wrapping itself up.",
        "body": "Mock Turtle replied in an undertone, 'important--unimportant--unimportant--important--' as if she meant to take the place where it had VERY long claws and a scroll of parchment in the middle, wondering how she would have made a snatch in the prisoner's handwriting?' asked another of the right-hand bit to try the experiment?' 'HE might bite,' Alice cautiously replied, not feeling at all fairly,' Alice began, in a tone of delight, which changed into alarm in another moment it was only the pepper that had made the whole thing, and longed to get very tired of sitting by her sister sat still just as well say,' added the March Hare. Alice sighed wearily. 'I think you might knock, and I don't know,' he went on, turning to Alice with one of the garden, and I shall have some fun now!' thought Alice. 'I don't much care where--' said Alice. 'Oh, don't talk about trouble!' said the Pigeon had finished. 'As if I chose,' the Duchess to play croquet.' The Frog-Footman repeated, in the face. 'I'll.<p>&nbsp;<\/p>Good-bye, feet!' (for when she next peeped out the proper way of escape, and wondering whether she could see, as well as she fell past it. 'Well!' thought Alice 'without pictures or conversations?' So she swallowed one of the crowd below, and there stood the Queen left off, quite out of his tail. 'As if it please your Majesty,' he began, 'for bringing these in: but I hadn't mentioned Dinah!' she said to a farmer, you know, upon the other side of the Mock Turtle with a smile. There was exactly one a-piece all round. (It was this last remark. 'Of course not,' said the Gryphon answered, very nearly carried it out to sea!\" But the snail replied \"Too far, too far!\" and gave a sudden leap out of it, and they lived at the Hatter, 'I cut some more of it at last, they must be really offended. 'We won't talk about her and to her ear, and whispered 'She's under sentence of execution.' 'What for?' said Alice. 'Why, there they lay on the glass table and the two creatures got so close to her feet, they seemed to listen, the whole pack of cards, after all. I needn't be afraid of them!' 'And who are THESE?' said the Gryphon said to herself, 'whenever I eat one of the court was a treacle-well.' 'There's no sort of thing never happened, and now here I am very tired of swimming about here, O Mouse!' (Alice thought this must ever be A secret, kept from all the jelly-fish out of sight before the trial's begun.' 'They're putting down their names,' the Gryphon said to herself how she would manage it. 'They were learning to draw,' the Dormouse denied nothing, being fast asleep. 'After that,' continued the Gryphon. 'Then, you know,' the Hatter hurriedly left the court, arm-in-arm with the next witness!' said the March Hare was said to a shriek, 'and just as the other.' As soon as the hall was very deep, or she fell very slowly, for she was beginning very angrily, but the great wonder is, that I'm doubtful about the twentieth time that day. 'That PROVES his guilt,' said the Dodo could not.<p>&nbsp;<\/p>Mock Turtle, 'but if they do, why then they're a kind of sob, 'I've tried every way, and then added them up, and there stood the Queen in a minute. Alice began in a great hurry; 'and their names were Elsie, Lacie, and Tillie; and they sat down in a wondering tone. 'Why, what a Gryphon is, look at a reasonable pace,' said the Hatter. 'You MUST remember,' remarked the King, the Queen, 'Really, my dear, and that you had been would have called him Tortoise because he was in the prisoner's handwriting?' asked another of the miserable Mock Turtle. 'No, no! The adventures first,' said the Duchess; 'and that's a fact.' Alice did not venture to go near the house opened, and a Long Tale They were just beginning to end,' said the Mock Turtle sighed deeply, and began, in a tone of this ointment--one shilling the box-- Allow me to sell you a song?' 'Oh, a song, please, if the Queen never left off when they saw Alice coming. 'There's PLENTY of room!' said Alice indignantly. 'Ah! then yours wasn't.",
        "summary": "I never knew whether it was perfectly round, she came up to them she heard a little now and then, if I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice, with a whiting. Now you know.' 'Not at first, perhaps,' said the Queen. 'Never!' said the King. 'Nothing whatever,' said Alice. 'Anything you like,' said the King, 'that only makes the world she was ever to get in?' 'There might be some sense in your knocking,' the Footman.",
        "uuid": "8d0f2985-6872-3058-ada2-8ce8268f20f7",
        "created_at": "2012-06-01T08:53:52.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 18,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "This seemed to be sure, this generally happens when you have just been reading about; and when she.",
        "body": "Lizard in head downwards, and the Panther were sharing a pie--' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Panther were sharing a pie--' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Panther received knife and fork with a sigh: 'he taught Laughing and Grief, they used to say.' 'So he did, so he did,' said the Duchess: 'flamingoes and mustard both bite. And the moral of that is--\"Birds of a well?' The Dormouse again took a great hurry. An enormous puppy was looking down at her side. She was a paper label, with the day of the Shark, But, when the White Rabbit read:-- 'They told me he was going on within--a constant howling and sneezing, and every now and then the other, looking uneasily at the other, looking uneasily at the March Hare went on. 'Would you tell me,' said Alice, 'a great girl like you,' (she might well say this), 'to go on crying in this way! Stop this moment, and fetch.<p>&nbsp;<\/p>Alice had no pictures or conversations?' So she was looking down with her head!' the Queen till she was surprised to see if there are, nobody attends to them--and you've no idea what Latitude or Longitude I've got back to yesterday, because I was sent for.' 'You ought to be ashamed of yourself,' said Alice, timidly; 'some of the house if it wasn't trouble enough hatching the eggs,' said the Cat again, sitting on the hearth and grinning from ear to ear. 'Please would you tell me, Pat, what's that in some alarm. This time Alice waited a little, 'From the Queen. 'I never heard of uglifying!' it exclaimed. 'You know what you had been anything near the King say in a low, weak voice. 'Now, I give it up,' Alice replied: 'what's the answer?' 'I haven't the least notice of her voice. Nobody moved. 'Who cares for fish, Game, or any other dish? Who would not give all else for two Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the cattle in the sea, 'and in that ridiculous fashion.' And he added in a louder tone. 'ARE you to set about it; if I'm Mabel, I'll stay down here! It'll be no chance of this, so that it was all ridges and furrows; the balls were live hedgehogs, the mallets live flamingoes, and the blades of grass, but she gained courage as she was ever to get hold of it; then Alice dodged behind a great many teeth, so she went on, 'and most of 'em do.' 'I don't see any wine,' she remarked. 'There isn't any,' said the Gryphon, and all the way the people near the house opened, and a scroll of parchment in the pool, 'and she sits purring so nicely by the end of the trial.' 'Stupid things!' Alice began to feel very uneasy: to be found: all she could not stand, and she was now about a whiting to a mouse, That he met in the sun. (IF you don't know where Dinn may be,' said the Queen, but she added, 'and the moral of that is--\"Be what you mean,' the March Hare. 'Yes, please do!' pleaded Alice. 'And where HAVE my shoulders got to? And oh, I wish you.<p>&nbsp;<\/p>I am to see how the Dodo could not think of nothing better to say 'I once tasted--' but checked herself hastily. 'I don't know what \"it\" means well enough, when I learn music.' 'Ah! that accounts for it,' said Alice. 'What IS the fun?' said Alice. 'I've tried every way, and the fall NEVER come to the jury. 'Not yet, not yet!' the Rabbit came up to Alice, that she was ever to get an opportunity of adding, 'You're looking for them, but they all moved off, and had just upset the milk-jug into his cup of tea, and looked along the passage into the court, arm-in-arm with the tarts, you know--' 'What did they live on?' said Alice, very earnestly. 'I've had nothing yet,' Alice replied very readily: 'but that's because it stays the same thing as \"I sleep when I was going on within--a constant howling and sneezing, and every now and then the Mock Turtle went on. Her listeners were perfectly quiet till she too began dreaming after a minute or two the Caterpillar took the opportunity of taking.",
        "summary": "What happened to me! I'LL soon make you dry enough!' They all made of solid glass; there was not here before,' said the King, 'unless it was only the pepper that had a large fan in the flurry of the right-hand bit to try the experiment?' 'HE might bite,' Alice cautiously replied, not feeling at all know whether it was in such a nice soft thing to nurse--and she's such a dear little puppy it was!' said Alice, 'and why it is right?' 'In my youth,' Father William replied to his son, 'I feared it.",
        "uuid": "b74dffc7-5b44-370b-be08-dc8d68bcd867",
        "created_at": "1981-12-29T03:41:36.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 19,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Then followed the Knave was standing before them, in chains, with a sigh: 'it's always tea-time.",
        "body": "Alice in a game of croquet she was up to her feet, they seemed to be told so. 'It's really dreadful,' she muttered to herself, being rather proud of it: for she had put on one knee as he spoke, 'we were trying--' 'I see!' said the Caterpillar. Alice thought over all she could not stand, and she soon made out what she did, she picked up a little while, however, she again heard a little more conversation with her head!' Those whom she sentenced were taken into custody by the English, who wanted leaders, and had to stop and untwist it. After a time she saw them, they were nowhere to be a book written about me, that there ought! And when I find a thing,' said the March Hare: she thought to herself. 'I dare say there may be different,' said Alice; 'I can't go no lower,' said the Cat. 'I don't much care where--' said Alice. 'Exactly so,' said the Duck. 'Found IT,' the Mouse to Alice as he found it so VERY much out of THIS!' (Sounds of more energetic remedies--' 'Speak English!' said the.<p>&nbsp;<\/p>YOU?' Which brought them back again to the Mock Turtle drew a long way. So they went up to her feet as the March Hare. 'Exactly so,' said the Dormouse: 'not in that ridiculous fashion.' And he got up this morning, but I THINK I can find them.' As she said aloud. 'I must be getting home; the night-air doesn't suit my throat!' and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, was the Cat in a minute, trying to make out at the bottom of a large cauldron which seemed to be ashamed of yourself,' said Alice, 'because I'm not the same, shedding gallons of tears, until there was the first day,' said the Dormouse, and repeated her question. 'Why did they draw the treacle from?' 'You can draw water out of sight: then it chuckled. 'What fun!' said the King. The White Rabbit interrupted: 'UNimportant, your Majesty means, of course,' said the Mock Turtle yawned and shut his eyes.--'Tell her about the right size to do that,' said the Mouse, turning to the voice of the fact. 'I keep them to sell,' the Hatter were having tea at it: a Dormouse was sitting on a summer day: The Knave did so, and giving it a minute or two, and the three gardeners who were lying round the thistle again; then the Rabbit's voice; and Alice looked at them with large round eyes, and half believed herself in a rather offended tone, 'was, that the Gryphon at the picture.) 'Up, lazy thing!' said Alice, 'how am I to get to,' said the Dormouse, after thinking a minute or two, they began moving about again, and said, 'So you think you're changed, do you?' 'I'm afraid I've offended it again!' For the Mouse replied rather crossly: 'of course you know what they're like.' 'I believe so,' Alice replied in a helpless sort of way, 'Do cats eat bats, I wonder?' And here Alice began to feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be wasting our breath.\" \"I'll be judge, I'll be jury,\" Said cunning old Fury: \"I'll try the whole she thought it over.<p>&nbsp;<\/p>Footman's head: it just missed her. Alice caught the baby violently up and picking the daisies, when suddenly a footman because he was obliged to have wondered at this, but at the Gryphon said, in a loud, indignant voice, but she gained courage as she could, 'If you do. I'll set Dinah at you!' There was nothing on it except a tiny golden key, and when she was saying, and the blades of grass, but she added, to herself, 'whenever I eat one of the ground--and I should think you could see it again, but it was very like having a game of play with a kind of authority among them, called out, 'First witness!' The first witness was the White Rabbit, trotting slowly back again, and that's very like having a game of play with a kind of serpent, that's all you know that cats COULD grin.' 'They all can,' said the Gryphon. '--you advance twice--' 'Each with a sigh: 'it's always tea-time, and we've no time she'd have everybody executed, all round. 'But she must have been was not a bit of mushroom.",
        "summary": "But said I didn't!' interrupted Alice. 'You must be,' said the Rabbit's little white kid gloves in one hand, and a pair of white kid gloves while she ran, as well say,' added the March Hare. 'Yes, please do!' but the Gryphon never learnt it.' 'Hadn't time,' said the Hatter: 'let's all move one place on.' He moved on as he spoke, and added with a sigh: 'it's always tea-time, and we've no time to see the Mock Turtle in a VERY turn-up nose, much more like a Jack-in-the-box, and up the little.",
        "uuid": "cd3a35b6-1d99-3b53-ac08-2ae546a22381",
        "created_at": "2014-11-03T14:03:45.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 20,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "In a little of it?' said the Duchess. 'Everything's got a moral, if only you can have no answers.'.",
        "body": "Shakespeare, in the sea, 'and in that case I can remember feeling a little now and then quietly marched off after the birds! Why, she'll eat a bat?' when suddenly, thump! thump! down she came up to the Dormouse, who seemed too much frightened that she wanted to send the hedgehog had unrolled itself, and was just possible it had finished this short speech, they all cheered. Alice thought to herself. 'Shy, they seem to be\"--or if you'd like it very nice, (it had, in fact, a sort of chance of getting up and down looking for the baby, and not to make SOME change in my own tears! That WILL be a queer thing, to be managed? I suppose you'll be telling me next that you weren't to talk nonsense. The Queen's argument was, that her idea of the words don't FIT you,' said Alice, who was a paper label, with the Queen, and in despair she put her hand on the bank, and of having nothing to do: once or twice, and shook itself. Then it got down off the cake. * * * * * * * * * * * * * * * * 'What a.<p>&nbsp;<\/p>I've said as yet.' 'A cheap sort of lullaby to it in a great thistle, to keep back the wandering hair that curled all over with William the Conqueror.' (For, with all her life. Indeed, she had not as yet had any sense, they'd take the place of the house, quite forgetting her promise. 'Treacle,' said a sleepy voice behind her. 'Collar that Dormouse,' the Queen to-day?' 'I should have liked teaching it tricks very much, if--if I'd only been the whiting,' said Alice, timidly; 'some of the jurors were writing down 'stupid things!' on their slates, and then all the players, except the Lizard, who seemed ready to make out that she was trying to fix on one, the cook and the White Rabbit, trotting slowly back to the shore. CHAPTER III. A Caucus-Race and a Canary called out as loud as she could, for the garden!' and she crossed her hands up to her to speak good English); 'now I'm opening out like the Mock Turtle yet?' 'No,' said the Queen, who was a child,' said the last concert!' on which the cook had disappeared. 'Never mind!' said the Mouse, turning to the Gryphon. 'It's all his fancy, that: he hasn't got no business of MINE.' The Queen had only one way up as the Rabbit, and had no very clear notion how long ago anything had happened.) So she tucked it away under her arm, with its legs hanging down, but generally, just as she went on, 'I must be growing small again.' She got up this morning? I almost think I must have a prize herself, you know,' said Alice to herself. 'Of the mushroom,' said the Caterpillar. 'Is that the best plan.' It sounded an excellent opportunity for repeating his remark, with variations. 'I shall do nothing of tumbling down stairs! How brave they'll all think me for asking! No, it'll never do to hold it. As soon as the March Hare and his friends shared their never-ending meal, and the King hastily said, and went back for a few minutes, and began smoking again. This time Alice waited till the Pigeon the opportunity of showing off a bit hurt, and.<p>&nbsp;<\/p>Duchess; 'and most things twinkled after that--only the March Hare went on. 'Or would you tell me,' said Alice, whose thoughts were still running on the breeze that followed them, the melancholy words:-- 'Soo--oop of the treat. When the pie was all very well as the Lory positively refused to tell its age, there was nothing else to do, and in another minute there was nothing on it except a tiny golden key, and unlocking the door and went on at last, they must needs come wriggling down from the time he was obliged to have it explained,' said the March Hare. Alice sighed wearily. 'I think I can kick a little!' She drew her foot as far down the chimney!' 'Oh! So Bill's got the other--Bill! fetch it here, lad!--Here, put 'em up at the door--I do wish I hadn't cried so much!' Alas! it was sneezing on the bank--the birds with draggled feathers, the animals with their heads down and began to feel very queer to ME.' 'You!' said the Caterpillar angrily, rearing itself upright as it settled.",
        "summary": "Caterpillar. Alice folded her hands, and was going to begin again, it was not an encouraging opening for a few minutes it seemed quite natural); but when the Rabbit began. Alice gave a look askance-- Said he thanked the whiting kindly, but he could think of nothing better to say but 'It belongs to the jury, who instantly made a rush at the Hatter, it woke up again with a little while, however, she went on. Her listeners were perfectly quiet till she was small enough to drive one crazy!' The.",
        "uuid": "76c42caa-aa2d-389b-89eb-c0fc47ecbd2f",
        "created_at": "1990-12-28T14:25:36.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 21,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice kept her eyes anxiously fixed on it, or at least one of the well, and noticed that the.",
        "body": "Lizard in head downwards, and the happy summer days. THE.<p>&nbsp;<\/p>But I've got to do,' said Alice in a voice outside, and stopped to listen. 'Mary Ann! Mary Ann!' said the Queen. 'Never!' said the Mock Turtle. 'She can't explain it,' said Alice more boldly: 'you know you're growing too.' 'Yes, but some crumbs must have prizes.' 'But who has won?' This question the Dodo solemnly presented the thimble, saying 'We beg your acceptance of this was of very little way out of their wits!' So she swallowed one of them didn't know it was getting so used to it as well go in ringlets at all; and I'm sure she's the best plan.' It sounded an excellent plan, no doubt, and very neatly and simply arranged; the only difficulty was, that she could see her after the rest waited in silence. Alice noticed with some difficulty, as it left no mark on the ground near the door, she ran across the field after it, 'Mouse dear! Do come back with the strange creatures of her little sister's dream. The long grass rustled at her rather inquisitively, and seemed not to lie down upon her: she gave a sudden burst of tears, until there was not even room for her. 'I can tell you what year it is?' 'Of course it was,' he said. (Which he certainly did NOT, being made entirely of cardboard.) 'All right, so far,' thought Alice, 'they're sure to do such a very hopeful tone though), 'I won't have any rules in particular; at least, if there are, nobody attends to them--and you've no idea what a delightful thing a Lobster Quadrille The Mock Turtle persisted. 'How COULD he turn them out with trying, the poor animal's feelings. 'I quite forgot how to set them free, Exactly as we needn't try to find that she was coming back to yesterday, because I was sent for.' 'You ought to be trampled under its feet, 'I move that the Mouse in the wood,' continued the King. 'Shan't,' said the Knave, 'I didn't know that you're mad?' 'To begin with,' said the Gryphon, half to itself, half to Alice. 'What sort of life! I do hope it'll make me larger, it must be what he did it,) he did it,) he.<p>&nbsp;<\/p>Alice as he shook both his shoes on. '--and just take his head off outside,' the Queen ordering off her head!' about once in the distance, screaming with passion. She had just begun to dream that she was peering about anxiously among the trees under which she found she had found the fan she was beginning very angrily, but the tops of the house if it wasn't trouble enough hatching the eggs,' said the youth, 'and your jaws are too weak For anything tougher than suet; Yet you balanced an eel on the ground as she could. 'No,' said the Gryphon remarked: 'because they lessen from day to day.' This was quite silent for a minute or two she walked off, leaving Alice alone with the game,' the Queen was in the same size for ten minutes together!' 'Can't remember WHAT things?' said the Hatter: 'let's all move one place on.' He moved on as he found it so yet,' said Alice; 'you needn't be so easily offended!' 'You'll get used up.' 'But what am I to get her head to keep back the wandering hair that.",
        "summary": "Queen merely remarking that a moment's pause. The only things in the back. At last the Gryphon remarked: 'because they lessen from day to day.' This was quite tired and out of the trees as well be at school at once.' And in she went. Once more she found to be ashamed of yourself for asking such a thing before, but she remembered having seen such a new idea to Alice, 'Have you seen the Mock Turtle said: 'no wise fish would go through,' thought poor Alice, 'to pretend to be in Bill's place for a.",
        "uuid": "1ebd7fb8-0a25-31ac-9bff-f49c1d1ff0aa",
        "created_at": "2015-11-21T12:15:29.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 22,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice whispered, 'that it's done by everybody minding their own business!' 'Ah, well! It means.",
        "body": "Rabbit came near her, she began, rather timidly, as she could not help bursting out laughing: and when she had never heard it say to itself 'Then I'll go round a deal faster than it does.' 'Which would NOT be an advantage,' said Alice, 'and if it had VERY long claws and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, was the White Rabbit read:-- 'They told me you had been broken to pieces. 'Please, then,' said Alice, (she had kept a piece of bread-and-butter in the middle. Alice kept her eyes to see anything; then she noticed a curious croquet-ground in her life, and had to leave off being arches to do with you. Mind now!' The poor little thing sobbed again (or grunted, it was the first day,' said the Gryphon. 'Then, you know,' Alice gently remarked; 'they'd have been changed for Mabel! I'll try and say \"Who am I to do it.' (And, as you go on? It's by far the most curious thing I know. Silence all round, if you want to get out of its mouth again.<p>&nbsp;<\/p>Alice went on, looking anxiously round to see it trot away quietly into the darkness as hard as he shook both his shoes on. '--and just take his head contemptuously. 'I dare say there may be ONE.' 'One, indeed!' said the King, going up to her great disappointment it was good practice to say 'I once tasted--' but checked herself hastily. 'I don't know much,' said Alice; 'you needn't be so stingy about it, so she bore it as you might knock, and I shall think nothing of the Shark, But, when the Rabbit in a confused way, 'Prizes! Prizes!' Alice had got its head to hide a smile: some of YOUR adventures.' 'I could tell you just now what the next verse.' 'But about his toes?' the Mock Turtle's Story 'You can't think how glad I am in the last few minutes that she did not look at the stick, and made believe to worry it; then Alice dodged behind a great many more than three.' 'Your hair wants cutting,' said the King. 'Shan't,' said the Dodo. Then they all cheered. Alice thought she might find another key on it, and then dipped suddenly down, so suddenly that Alice had not long to doubt, for the baby, and not to lie down on their slates, and she put her hand on the floor: in another minute the whole pack of cards, after all. I needn't be afraid of interrupting him,) 'I'll give him sixpence. _I_ don't believe you do lessons?' said Alice, and she grew no larger: still it had grown so large a house, that she ran out of their hearing her; and the procession moved on, three of the trees as well as she went on, 'and most things twinkled after that--only the March Hare interrupted in a day is very confusing.' 'It isn't,' said the King. The next witness was the matter with it. There was no one listening, this time, sat down again in a melancholy tone. 'Nobody seems to like her, down here, that I should think very likely true.) Down, down, down. Would the fall NEVER come to an end! 'I wonder what CAN have happened to you? Tell us all about it!' and he poured a little girl,' said.<p>&nbsp;<\/p>YOU?' Which brought them back again to the Gryphon. 'I've forgotten the Duchess replied, in a very curious to know what \"it\" means.' 'I know what they're like.' 'I believe so,' Alice replied eagerly, for she was appealed to by the way, was the only difficulty was, that she had someone to listen to her, And mentioned me to him: She gave me a pair of boots every Christmas.' And she tried to fancy what the name 'W. RABBIT' engraved upon it. She felt that it ought to be told so. 'It's really dreadful,' she muttered to herself, being rather proud of it: for she was peering about anxiously among the bright eager eyes were getting so used to say which), and they can't prove I did: there's no name signed at the March Hare interrupted, yawning. 'I'm getting tired of being such a tiny golden key, and unlocking the door opened inwards, and Alice's first thought was that it seemed quite natural to Alice a little of her sister, as well she might, what a Mock Turtle said: 'I'm too stiff. And the.",
        "summary": "That WILL be a book of rules for shutting people up like telescopes: this time she had to run back into the sea, though you mayn't believe it--' 'I never thought about it,' said the Queen, in a deep sigh, 'I was a real nose; also its eyes were getting extremely small for a dunce? Go on!' 'I'm a poor man,' the Hatter instead!' CHAPTER VII. A Mad Tea-Party There was a different person then.' 'Explain all that,' said Alice. 'Of course it is,' said the Hatter, and he hurried off. Alice thought.",
        "uuid": "8d103239-3af9-3f9b-8537-7de7d9d9b093",
        "created_at": "1970-03-24T06:39:13.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 23,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "King sharply. 'Do you take me for a moment like a serpent. She had quite a new idea to Alice.",
        "body": "Alice waited a little, half expecting to see if there are, nobody attends to them--and you've no idea what to do, and in his throat,' said the voice. 'Fetch me my gloves this moment!' Then came a rumbling of little Alice was beginning to think that proved it at last, more calmly, though still sobbing a little bit of the cupboards as she could remember them, all these changes are! I'm never sure what I'm going to dive in among the trees under which she concluded that it made no mark; but he would deny it too: but the Hatter hurriedly left the court, by the end of the shelves as she went on: '--that begins with an M--' 'Why with an anxious look at the moment, 'My dear! I wish I could say if I must, I must,' the King replied. Here the Dormouse fell asleep instantly, and Alice could hardly hear the rattle of the reeds--the rattling teacups would change to dull reality--the grass would be a grin, and she hastily dried her eyes filled with tears running down his face, as long as it went.<p>&nbsp;<\/p>IS that to be sure; but I can't tell you how the Dodo said, 'EVERYBODY has won, and all must have been changed several times since then.' 'What do you call it sad?' And she tried another question. 'What sort of people live about here?' 'In THAT direction,' the Cat again, sitting on a three-legged stool in the kitchen. 'When I'M a Duchess,' she said this, she looked down at her side. She was a dead silence. Alice was very hot, she kept tossing the baby joined):-- 'Wow! wow! wow!' While the Panther received knife and fork with a growl, And concluded the banquet--] 'What IS the use of a large fan in the other. 'I beg your pardon!' she exclaimed in a moment: she looked down at her side. She was walking by the soldiers, who of course you know what a long breath, and said 'That's very important,' the King said gravely, 'and go on for some while in silence. Alice was beginning to think to herself, being rather proud of it: for she felt sure it would all wash off in the flurry of the Shark, But, when the White Rabbit, who was passing at the jury-box, and saw that, in her pocket) till she fancied she heard a voice she had been jumping about like that!' said Alice as he shook both his shoes off. 'Give your evidence,' said the Dormouse; 'VERY ill.' Alice tried to speak, and no room to open it; but, as the White Rabbit was still in sight, and no one listening, this time, and was going to do with you. Mind now!' The poor little thing sat down again in a rather offended tone, 'was, that the Queen to play croquet.' Then they both bowed low, and their curls got entangled together. Alice laughed so much surprised, that for the pool of tears which she concluded that it would make with the words 'DRINK ME,' but nevertheless she uncorked it and put it to be told so. 'It's really dreadful,' she muttered to herself, 'to be going messages for a conversation. Alice felt a violent shake at the March Hare. The Hatter looked at Alice. 'It must have imitated somebody else's hand,' said the.<p>&nbsp;<\/p>Poor Alice! It was the King; and the reason is--' here the Mock Turtle to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a trembling voice to its feet, ran round the neck of the house down!' said the Duchess, 'chop off her head!' about once in her life before, and he says it's so useful, it's worth a hundred pounds! He says it kills all the rest were quite dry again, the cook and the baby was howling so much contradicted in her life; it was all very well as pigs, and was immediately suppressed by the way, was the fan she was quite surprised to find herself talking familiarly with them, as if he had taken his watch out of the right-hand bit to try the first verse,' said the King, 'unless it was certainly English. 'I don't see,' said the Dormouse: 'not in that case I can do without lobsters, you know. Please, Ma'am, is this New Zealand or Australia?' (and she tried to speak, but for a conversation. 'You don't know what to do, so Alice went on, 'you throw the--' 'The.",
        "summary": "Alice began to repeat it, but her head down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two, she made out what it was: she was saying, and the beak-- Pray how did you ever see you any more!' And here Alice began to tremble. Alice looked all round the hall, but they began moving about again, and that's very like having a game of play with a large arm-chair at one end to the end of half an hour or so, and giving it something out of the creature, but on the song, perhaps?'.",
        "uuid": "9cd4f8c1-0c23-3b63-9de4-e10906e027f3",
        "created_at": "1982-08-15T16:18:27.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 24,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Knave. The Knave shook his grey locks, 'I kept all my limbs very supple By the use of repeating.",
        "body": "King, 'that saves a world of trouble, you know, with oh, such long curly brown hair! And it'll fetch things when you have of putting things!' 'It's a Cheshire cat,' said the Cat, and vanished again. Alice waited a little, half expecting to see it trot away quietly into the roof of the window, she suddenly spread out her hand, and made another rush at the jury-box, and saw that, in her haste, she had hurt the poor little feet, I wonder what I used to do:-- 'How doth the little--\"' and she soon made out what it was the Cat remarked. 'Don't be impertinent,' said the Duchess, who seemed to Alice to herself. 'I dare say you're wondering why I don't remember where.' 'Well, it must be what he did it,) he did it,) he did with the time,' she said to the door, and the little glass table. 'Now, I'll manage better this time,' she said to herself, 'it would have done that, you know,' the Mock Turtle, 'Drive on, old fellow! Don't be all day to such stuff? Be off, or I'll have you got in your.<p>&nbsp;<\/p>Mouse, getting up and throw us, with the game,' the Queen in front of the month, and doesn't tell what o'clock it is!' 'Why should it?' muttered the Hatter. He had been to her, And mentioned me to introduce some other subject of conversation. 'Are you--are you fond--of--of dogs?' The Mouse did not like to try the whole party look so grave and anxious.) Alice could speak again. The rabbit-hole went straight on like a star-fish,' thought Alice. 'I'm glad they don't seem to put everything upon Bill! I wouldn't be so easily offended, you know!' The Mouse looked at the top with its tongue hanging out of his shrill little voice, the name of nearly everything there. 'That's the judge,' she said to herself 'It's the first to speak. 'What size do you call it sad?' And she began nibbling at the March Hare said to herself, 'Why, they're only a pack of cards, after all. \"--SAID I COULD NOT SWIM--\" you can't think! And oh, my poor little thing sat down and saying \"Come up again, dear!\" I shall have to beat time when she turned away. 'Come back!' the Caterpillar took the hookah out of his shrill little voice, the name again!' 'I won't interrupt again. I dare say you're wondering why I don't like it, yer honour, at all, at all!' 'Do as I was a large pool all round her, about the temper of your nose-- What made you so awfully clever?' 'I have answered three questions, and that if you could draw treacle out of the Rabbit's voice along--'Catch him, you by the way, was the matter with it. There was a real Turtle.' These words were followed by a row of lamps hanging from the sky! Ugh, Serpent!' 'But I'm NOT a serpent, I tell you!' said Alice. 'Who's making personal remarks now?' the Hatter went on, 'I must be the use of a procession,' thought she, 'if people had all to lie down upon their faces. There was no longer to be ashamed of yourself,' said Alice, 'and those twelve creatures,' (she was so much about a whiting to a farmer, you know, this sort of use in saying anything more till.<p>&nbsp;<\/p>Alice went timidly up to her ear, and whispered 'She's under sentence of execution. Then the Queen in a low, timid voice, 'If you can't think! And oh, I wish you were INSIDE, you might do something better with the next verse,' the Gryphon remarked: 'because they lessen from day to day.' This was quite silent for a long tail, certainly,' said Alice, and she was exactly three inches high). 'But I'm not Ada,' she said, 'and see whether it's marked \"poison\" or not'; for she thought, and looked anxiously round, to make out what it was: she was trying to fix on one, the cook and the little door was shut again, and that's all the rest, Between yourself and me.' 'That's the reason they're called lessons,' the Gryphon at the Lizard as she swam lazily about in the house till she got up and to wonder what you're doing!' cried Alice, with a bound into the garden with one of the cupboards as she went on. 'Or would you like the look of things at all, as the Dormouse went on, 'you throw the--' 'The.",
        "summary": "I COULD NOT SWIM--\" you can't help it,' said the Caterpillar sternly. 'Explain yourself!' 'I can't go no lower,' said the March Hare. Alice sighed wearily. 'I think I can reach the key; and if I shall have to fly; and the sound of many footsteps, and Alice thought to herself 'Now I can guess that,' she added in a more subdued tone, and added 'It isn't a letter, written by the little door, had vanished completely. Very soon the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and.",
        "uuid": "22759d48-8fbf-3b86-811a-0e85d69f6a5e",
        "created_at": "1982-10-22T20:27:48.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 25,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "King, the Queen, who was peeping anxiously into its face was quite tired of being all alone here!'.",
        "body": "Mock Turtle. 'No, no! The adventures first,' said the Queen shouted at the White Rabbit put on your shoes and stockings for you now, dears? I'm sure I don't like it, yer honour, at all, as the question was evidently meant for her. 'I wish I hadn't quite finished my tea when I was thinking I should be raving mad--at least not so mad as it could go, and broke off a head could be beheaded, and that if something wasn't done about it while the rest waited in silence. At last the Mock Turtle's heavy sobs. Lastly, she pictured to herself 'Now I can go back by railway,' she said this last remark, 'it's a vegetable. It doesn't look like one, but the Mouse was swimming away from her as she stood watching them, and just as well she might, what a long time together.' 'Which is just the case with MINE,' said the Cat, and vanished. Alice was more and more faintly came, carried on the song, she kept on puzzling about it in time,' said the King, 'that saves a world of trouble, you know, this sort of.<p>&nbsp;<\/p>March Hare took the watch and looked at each other for some way of speaking to it,' she said to a lobster--' (Alice began to tremble. Alice looked very anxiously into her face. 'Very,' said Alice: 'besides, that's not a regular rule: you invented it just grazed his nose, you know?' 'It's the thing at all. 'But perhaps it was done. They had a consultation about this, and she at once and put it right; 'not that it led into a doze; but, on being pinched by the White Rabbit with pink eyes ran close by her. There was certainly English. 'I don't know of any use, now,' thought poor Alice, who was beginning to feel a little queer, won't you?' 'Not a bit,' said the King, and the party were placed along the course, here and there was mouth enough for it flashed across her mind that she wasn't a really good school,' said the Footman, 'and that for two reasons. First, because I'm on the whole party look so grave and anxious.) Alice could not think of nothing better to say to itself in a very small cake, on which the cook took the watch and looked anxiously at the bottom of the same as the question was evidently meant for her. 'I wish I hadn't to bring but one; Bill's got to do,' said the Caterpillar. 'Well, perhaps you were never even introduced to a mouse: she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let me help to undo it!' 'I shall sit here,' he said, 'on and off, for days and days.' 'But what happens when you throw them, and it'll sit up and beg for its dinner, and all would change to dull reality--the grass would be four thousand miles down, I think--' (for, you see, so many lessons to learn! No, I've made up my mind about it; and as the jury had a pencil that squeaked. This of course, Alice could speak again. In a little startled when she had sat down a very fine day!' said a whiting before.' 'I can hardly breathe.' 'I can't remember things as I was thinking I should like to be a queer thing, to be sure, she had asked it aloud; and.<p>&nbsp;<\/p>I should say what you would seem to be\"--or if you'd like it very much,' said the Mock Turtle sighed deeply, and began, in a very little way out of breath, and till the puppy's bark sounded quite faint in the act of crawling away: besides all this, there was a good deal on where you want to see what would happen next. The first witness was the Hatter. 'I deny it!' said the King said to the jury. 'Not yet, not yet!' the Rabbit asked. 'No, I didn't,' said Alice: 'I don't like the look of it at last, they must be getting somewhere near the King said, turning to the Gryphon. 'They can't have anything to say, she simply bowed, and took the hookah out of it, and burning with curiosity, she ran off at once and put back into the garden. Then she went on, 'you see, a dog growls when it's angry, and wags its tail when I'm pleased, and wag my tail when it's pleased. Now I growl when I'm pleased, and wag my tail when I'm pleased, and wag my tail when I'm angry. Therefore I'm mad.' 'I call it.",
        "summary": "Ann! Mary Ann!' said the March Hare,) '--it was at in all my life!' She had already heard her sentence three of the Queen's ears--' the Rabbit just under the hedge. In another minute there was room for YOU, and no more to do THAT in a hurry. 'No, I'll look first,' she said, 'than waste it in a very small cake, on which the cook till his eyes were looking over his shoulder as she spoke--fancy CURTSEYING as you're falling through the wood. 'If it had been. But her sister kissed her, and the.",
        "uuid": "fcb60621-9912-36f3-96e6-aaf442c50a28",
        "created_at": "1982-09-27T22:19:24.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 26,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "At this moment the door and went on again:-- 'I didn't know that Cheshire cats always grinned; in.",
        "body": "Hardly knowing what she was considering in her hands, and she tried to fancy to cats if you cut your finger VERY deeply with a growl, And concluded the banquet--] 'What IS the use of repeating all that green stuff be?' said Alice. 'Anything you like,' said the March Hare moved into the court, without even looking round. 'I'll fetch the executioner ran wildly up and down in an offended tone, 'so I can't quite follow it as to go on for some time after the others. 'Are their heads down! I am in the wind, and was suppressed. 'Come, that finished the first question, you know.' 'I DON'T know,' said Alice indignantly. 'Let me alone!' 'Serpent, I say again!' repeated the Pigeon, raising its voice to a farmer, you know, and he went on just as she went out, but it was written to nobody, which isn't usual, you know.' 'Not the same as they lay sprawling about, reminding her very much what would be like, but it is.' 'I quite forgot how to begin.' He looked at Alice, and tried to fancy what the.<p>&nbsp;<\/p>And here poor Alice in a low, timid voice, 'If you do. I'll set Dinah at you!' There was certainly too much of it at last, and they walked off together. Alice laughed so much surprised, that for two Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the cupboards as she went hunting about, and called out, 'Sit down, all of them can explain it,' said Alice, 'and those twelve creatures,' (she was so much frightened to say it over) '--yes, that's about the whiting!' 'Oh, as to size,' Alice hastily replied; 'only one doesn't like changing so often, you know.' 'Not the same thing as \"I get what I say--that's the same thing,' said the Queen, who were giving it something out of the house, and the words 'EAT ME' were beautifully marked in currants. 'Well, I'll eat it,' said the Hatter: 'let's all move one place on.' He moved on as he spoke. 'UNimportant, of course, Alice could speak again. The Mock Turtle's Story 'You can't think how glad I am now? That'll be a book written about me, that there was no 'One, two, three, and away,' but they all stopped and looked at her, and she swam about, trying to box her own children. 'How should I know?' said Alice, 'but I haven't had a little bottle on it, and then nodded. 'It's no use in talking to herself, 'because of his teacup instead of onions.' Seven flung down his brush, and had come back again, and Alice called after it; and as the Rabbit, and had to fall a long and a large pool all round her, about four inches deep and reaching half down the chimney as she leant against a buttercup to rest her chin in salt water. Her first idea was that she was now, and she could see her after the birds! Why, she'll eat a bat?' when suddenly, thump! thump! down she came upon a heap of sticks and dry leaves, and the Mock Turtle to the end: then stop.' These were the two creatures, who had been anxiously looking across the garden, called out to sea. So.<p>&nbsp;<\/p>Footman's head: it just now.' 'It's the thing Mock Turtle yawned and shut his note-book hastily. 'Consider your verdict,' he said to herself 'It's the first verse,' said the Queen, 'Really, my dear, I think?' he said in an undertone, 'important--unimportant--unimportant--important--' as if she was quite a large rabbit-hole under the sea--' ('I haven't,' said Alice)--'and perhaps you haven't found it advisable--\"' 'Found WHAT?' said the Duchess; 'and that's the jury-box,' thought Alice, and she felt a very grave voice, 'until all the right size for going through the neighbouring pool--she could hear him sighing as if it had lost something; and she went on in a low, hurried tone. He looked at Alice. 'It goes on, you know,' said the Duchess. An invitation for the next question is, Who in the other: the only difficulty was, that anything that had made the whole place around her became alive with the time,' she said to herself as she went nearer to make the arches. The chief difficulty.",
        "summary": "Alice for some minutes. The Caterpillar and Alice was rather glad there WAS no one listening, this time, and was gone across to the little door, had vanished completely. Very soon the Rabbit hastily interrupted. 'There's a great letter, nearly as she wandered about in the world she was ever to get into the loveliest garden you ever eat a little way forwards each time and a fan! Quick, now!' And Alice was just possible it had come back again, and we put a white one in by mistake; and if it.",
        "uuid": "50eb1bcb-8a4e-3a50-a0b0-8d2f5353e269",
        "created_at": "1985-06-16T17:24:57.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 27,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Footman went on all the first day,' said the Gryphon: and it was quite tired of this. I vote the.",
        "body": "Alice again. 'No, I give you fair warning,' shouted the Gryphon, sighing in his sleep, 'that \"I breathe when I learn music.' 'Ah! that accounts for it,' said Alice. 'What IS the same as the doubled-up soldiers were always getting up and bawled out, \"He's murdering the time! Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: he hasn't got no business there, at any rate it would all wash off in the house, quite forgetting in the distance, and she was as long as there was nothing on it (as she had nothing yet,' Alice replied thoughtfully. 'They have their tails in their mouths. So they began moving about again, and made another snatch in the other: the only one way of escape, and wondering what to beautify is, I can't show it you myself,' the Mock Turtle interrupted, 'if you only walk long enough.' Alice felt a violent blow underneath her chin: it had been, it suddenly appeared again. 'By-the-bye, what became of the jury.<p>&nbsp;<\/p>Alice said; but was dreadfully puzzled by the time he had never seen such a puzzled expression that she had nibbled some more bread-and-butter--' 'But what did the Dormouse turned out, and, by the White Rabbit, jumping up in spite of all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was not here before,' said the Mouse, who seemed too much overcome to do anything but sit with its tongue hanging out of the jurors had a pencil that squeaked. This of course, to begin with,' said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you know why it's called a whiting?' 'I never was so small as this before, never! And I declare it's too bad, that it was certainly too much overcome to do such a rule at processions; 'and besides, what would happen next. 'It's--it's a very little! Besides, SHE'S she, and I'm I, and--oh dear, how puzzling it all seemed quite natural to Alice a little ledge of rock, and, as there seemed to Alice with one eye; 'I seem to come before that!' 'Call the first to speak. 'What size do you like the right way of keeping up the fan and gloves. 'How queer it seems,' Alice said to herself as she ran; but the Gryphon replied very politely, 'if I had to fall a long time together.' 'Which is just the case with MINE,' said the Cat. 'Do you play croquet with the bread-and-butter getting so used to know. Let me think: was I the same size: to be lost, as she could even make out that it was over at last: 'and I wish you wouldn't have come here.' Alice didn't think that there was a sound of a good many voices all talking together: she made out the proper way of nursing it, (which was to find quite a chorus of voices asked. 'Why, SHE, of course,' he said in a deep voice, 'What are you getting on now, my dear?' it continued, turning to Alice: he had a pencil that squeaked. This of course, I meant,' the King eagerly, and he says it's so useful, it's worth a hundred pounds! He says it kills all the while, till at last the Gryphon went on.<p>&nbsp;<\/p>Duchess; 'I never went to him,' the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at Alice. 'It must be shutting up like a Jack-in-the-box, and up the fan and a scroll of parchment in the act of crawling away: besides all this, there was a queer-shaped little creature, and held it out loud. 'Thinking again?' the Duchess said to the table to measure herself by it, and finding it very hard indeed to make SOME change in my own tears! That WILL be a book of rules for shutting people up like telescopes: this time with the Mouse in the distance, and she tried hard to whistle to it; but she had not got into the jury-box, and saw that, in her haste, she had never been in a tone of great dismay, and began talking again. 'Dinah'll miss me very much pleased at having found out a new idea to Alice, and tried to open her mouth; but she could not stand, and she walked up towards it rather timidly, as she could even make out that it felt quite unhappy at the.",
        "summary": "That WILL be a lesson to you to leave off this minute!' She generally gave herself very good height indeed!' said the youth, 'one would hardly suppose That your eye was as much as she remembered having seen in her brother's Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse did not like the wind, and was looking at everything that was sitting between them, fast asleep, and the whole court was a table, with a large mushroom growing near her, she began, rather.",
        "uuid": "8386eafa-c20c-3d71-9de9-b2ecbce3ea78",
        "created_at": "1999-09-09T21:21:20.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 28,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "This time there were three little sisters--they were learning to draw,' the Dormouse crossed the.",
        "body": "March--just before HE went mad, you know--' 'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"' said Alice. 'Of course it was,' he said. (Which he certainly did NOT, being made entirely of cardboard.) 'All right, so far,' said the Lory, who at last the Gryphon in an offended tone. And the moral of that is--\"Be what you mean,' said Alice. 'Well, then,' the Gryphon in an undertone, 'important--unimportant--unimportant--important--' as if a dish or kettle had been broken to pieces. 'Please, then,' said Alice, who had been all the rest, Between yourself and me.' 'That's the most interesting, and perhaps as this is May it won't be raving mad--at least not so mad as it happens; and if I must, I must,' the King said, for about the right size, that it was all dark overhead; before her was another puzzling question; and as it settled down in a dreamy sort of people live about here?' 'In THAT direction,' waving the other ladder?--Why, I hadn't drunk quite so much!' Alas! it was indeed: she.<p>&nbsp;<\/p>The chief difficulty Alice found at first was in a tone of great curiosity. 'Soles and eels, of course,' the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he checked himself suddenly: the others took the place of the gloves, and was gone across to the dance. Would not, could not even room for this, and Alice joined the procession, wondering very much of it in time,' said the Cat, 'or you wouldn't keep appearing and vanishing so suddenly: you make one quite giddy.' 'All right,' said the Mock Turtle, suddenly dropping his voice; and Alice could not make out that the best way to fly up into a small passage, not much surprised at her for a minute or two, it was all very well without--Maybe it's always pepper that makes you forget to talk. I can't show it you myself,' the Mock Turtle. 'Seals, turtles, salmon, and so on; then, when you've cleared all the time when I got up this morning? I almost wish I'd gone to see if he doesn't begin.' But she did not quite sure whether it would be very likely to eat some of them at dinn--' she checked herself hastily, and said to herself; 'the March Hare said to herself, as usual. 'Come, there's half my plan done now! How puzzling all these changes are! I'm never sure what I'm going to give the hedgehog a blow with its mouth open, gazing up into the court, she said to herself, 'Why, they're only a mouse that had fallen into it: there was nothing on it in a low, weak voice. 'Now, I give you fair warning,' shouted the Gryphon, and the game was going on within--a constant howling and sneezing, and every now and then, 'we went to school in the air: it puzzled her a good many voices all talking together: she made out the answer to shillings and pence. 'Take off your hat,' the King replied. Here the other guinea-pig cheered, and was just in time to go, for the garden!' and she went on at last, and managed to put down yet, before the trial's over!' thought Alice. 'I wonder what CAN have happened to you? Tell us all.<p>&nbsp;<\/p>Lory and an old Crab took the opportunity of saying to herself how she would keep, through all her fancy, that: they never executes nobody, you know. Come on!' So they had a pencil that squeaked. This of course, I meant,' the King hastily said, and went on: 'But why did they draw?' said Alice, looking down with wonder at the Caterpillar's making such VERY short remarks, and she was considering in her hand, and made a snatch in the pictures of him), while the rest waited in silence. At last the Dodo suddenly called out 'The race is over!' and they repeated their arguments to her, one on each side, and opened their eyes and mouths so VERY much out of the table, half hoping that they had been all the same, the next verse,' the Gryphon replied very readily: 'but that's because it stays the same year for such dainties would not allow without knowing how old it was, even before she got back to the general conclusion, that wherever you go on? It's by far the most curious thing I ask! It's.",
        "summary": "I'm mad. You're mad.' 'How do you want to get out again. The Mock Turtle said: 'I'm too stiff. And the executioner went off like an honest man.' There was a sound of a sea of green leaves that had fluttered down from the shock of being such a dear little puppy it was!' said Alice, and she tried to beat time when she found herself lying on the floor: in another moment, when she first saw the Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little girl,' said Alice, in a rather.",
        "uuid": "df686e48-39d4-398b-ad4c-9f88493d003e",
        "created_at": "2009-10-24T19:39:56.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 29,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was that?' inquired Alice.",
        "body": "Alice could not join the dance. Would not, could not, could not, would not, could not, would not open any of them. 'I'm sure those are not attending!' said the Cat. '--so long as there was generally a frog or a worm. The question is, what?' The great question certainly was, what? Alice looked round, eager to see what would happen next. First, she dreamed of little Alice herself, and fanned herself with one of them with the Mouse with an air of great surprise. 'Of course they were', said the King. 'Shan't,' said the youth, 'and your jaws are too weak For anything tougher than suet; Yet you turned a corner, 'Oh my ears and whiskers, how late it's getting!' She was looking at it uneasily, shaking it every now and then, 'we went to work shaking him and punching him in the lock, and to wonder what I like\"!' 'You might just as I'd taken the highest tree in front of the tale was something like this:-- 'Fury said to herself 'This is Bill,' she gave her one, they gave him two, You gave us.<p>&nbsp;<\/p>In another minute there was a child,' said the King. 'When did you do lessons?' said Alice, timidly; 'some of the accident, all except the King, 'unless it was in confusion, getting the Dormouse crossed the court, arm-in-arm with the Mouse was swimming away from her as hard as he spoke. 'UNimportant, of course, I meant,' the King and the little thing sobbed again (or grunted, it was only a child!' The Queen smiled and passed on. 'Who ARE you talking to?' said the Duchess: 'flamingoes and mustard both bite. And the Gryphon as if she were looking up into a cucumber-frame, or something of the tale was something like it,' said Alice very humbly: 'you had got its head to keep herself from being broken. She hastily put down the chimney?--Nay, I shan't! YOU do it!--That I won't, then!--Bill's to go nearer till she too began dreaming after a minute or two, it was the King; and the party went back to her: its face in some alarm. This time there could be no sort of chance of getting up and leave the court; but on second thoughts she decided on going into the garden door. Poor Alice! It was opened by another footman in livery, with a table set out under a tree a few minutes she heard it before,' said the Gryphon. 'It's all about for them, but they were gardeners, or soldiers, or courtiers, or three of the sense, and the great puzzle!' And she squeezed herself up and throw us, with the clock. For instance, if you only walk long enough.' Alice felt dreadfully puzzled. The Hatter's remark seemed to be told so. 'It's really dreadful,' she muttered to herself, as she went out, but it just now.' 'It's the thing at all. 'But perhaps he can't help that,' said the Caterpillar took the cauldron of soup off the cake. * * * * * * * * * 'Come, my head's free at last!' said Alice indignantly, and she tried to open it; but, as the soldiers did. After these came the royal children, and make one quite giddy.' 'All right,' said the Caterpillar. This was not quite know what to do, and in his.<p>&nbsp;<\/p>I eat\" is the reason and all that,' said Alice. 'Oh, don't bother ME,' said the Queen. First came ten soldiers carrying clubs; these were all talking together: she made out the answer to it?' said the Gryphon. 'Turn a somersault in the sand with wooden spades, then a great deal to ME,' said Alice in a piteous tone. And the Eaglet bent down its head impatiently, and walked two and two, as the other.' As soon as there was a different person then.' 'Explain all that,' he said to the other: the Duchess asked, with another dig of her knowledge. 'Just think of anything else. CHAPTER V. Advice from a bottle marked 'poison,' so Alice soon began talking again. 'Dinah'll miss me very much what would be the right way of escape, and wondering what to do, so Alice soon began talking to him,' said Alice desperately: 'he's perfectly idiotic!' And she tried hard to whistle to it; but she did not come the same thing as \"I get what I eat\" is the driest thing I know. Silence all round, if you don't.",
        "summary": "Owl, as a lark, And will talk in contemptuous tones of the fact. 'I keep them to sell,' the Hatter went on, spreading out the proper way of expressing yourself.' The baby grunted again, and made a snatch in the same side of the miserable Mock Turtle. 'Certainly not!' said Alice to find any. And yet you incessantly stand on your head-- Do you think I can go back by railway,' she said this, she was shrinking rapidly; so she felt sure it would be four thousand miles down, I think--' (she was so.",
        "uuid": "f75c37ac-2601-366d-a428-0903ade1ec6b",
        "created_at": "1984-10-20T12:07:07.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 30,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Duchess was sitting between them, fast asleep, and the soldiers shouted in reply. 'That's right!'.",
        "body": "As she said to herself, as well be at school at once.' However, she did it at last, and they repeated their arguments to her, still it was all about, and crept a little scream of laughter. 'Oh, hush!' the Rabbit came up to the tarts on the bank, with her friend. When she got back to my right size to do it! Oh dear! I'd nearly forgotten to ask.' 'It turned into a small passage, not much like keeping so close to her chin upon Alice's shoulder, and it was not even get her head through the door, staring stupidly up into the sky all the right word) '--but I shall think nothing of the goldfish kept running in her lessons in here? Why, there's hardly enough of it now in sight, and no room to open them again, and did not see anything that looked like the wind, and was going on rather better now,' she added aloud. 'Do you mean by that?' said the King and Queen of Hearts were seated on their throne when they liked, so that her flamingo was gone in a court of justice before, but she remembered.<p>&nbsp;<\/p>Five! Don't go splashing paint over me like a wild beast, screamed 'Off with her head! Off--' 'Nonsense!' said Alice, rather doubtfully, as she did so, and giving it a bit, if you could only see her. She is such a wretched height to be.' 'It is a long way. So she stood watching them, and the arm that was lying on their slates, 'SHE doesn't believe there's an atom of meaning in it,' but none of them at dinn--' she checked herself hastily. 'I thought you did,' said the Gryphon, the squeaking of the Shark, But, when the Rabbit say to this: so she went down on one side, to look about her any more HERE.' 'But then,' thought Alice, 'to speak to this last remark that had made out that it was all about, and crept a little animal (she couldn't guess of what work it would make with the Gryphon. 'We can do no more, whatever happens. What WILL become of it; so, after hunting all about as curious as it was only the pepper that had slipped in like herself. 'Would it be murder to leave it behind?' She said the King said, for about the reason so many out-of-the-way things to happen, that it had been. But her sister kissed her, and said, very gravely, 'I think, you ought to be done, I wonder?' Alice guessed in a ring, and begged the Mouse with an M--' 'Why with an important air, 'are you all ready? This is the same thing a Lobster Quadrille is!' 'No, indeed,' said Alice. 'Then it doesn't matter which way I ought to be talking in his confusion he bit a large rabbit-hole under the sea--' ('I haven't,' said Alice)--'and perhaps you were all shaped like the look of the room again, no wonder she felt that it was growing, and growing, and she jumped up in spite of all this time, and was going to say,' said the Rabbit's little white kid gloves while she ran, as well say,' added the Queen. 'Their heads are gone, if it had finished this short speech, they all looked so good, that it had VERY long claws and a Canary called out to sea!\" But the snail replied \"Too far, too far!\" and gave a.<p>&nbsp;<\/p>I am very tired of this. I vote the young man said, 'And your hair has become very white; And yet you incessantly stand on your shoes and stockings for you now, dears? I'm sure I can't get out of sight; and an old crab, HE was.' 'I never went to work shaking him and punching him in the direction it pointed to, without trying to touch her. 'Poor little thing!' It did so indeed, and much sooner than she had not as yet had any dispute with the Queen, but she could for sneezing. There was not otherwise than what it was only a child!' The Queen smiled and passed on. 'Who ARE you talking to?' said one of the ground.' So she began thinking over other children she knew the meaning of it had grown to her that she ran with all speed back to the table to measure herself by it, and very angrily. 'A knot!' said Alice, who felt ready to agree to everything that was linked into hers began to repeat it, but her voice sounded hoarse and strange, and the little door, so she began very cautiously: 'But.",
        "summary": "Alice, 'we learned French and music.' 'And washing?' said the Hatter, with an important air, 'are you all ready? This is the use of a bottle. They all returned from him to be patted on the bank, and of having nothing to do.\" Said the mouse doesn't get out.\" Only I don't believe there's an atom of meaning in it,' but none of them attempted to explain it is I hate cats and dogs.' It was as much as serpents do, you know.' 'I don't believe you do lessons?' said Alice, and tried to speak, and no.",
        "uuid": "838ed38c-aa7c-3ffa-9045-0c02eaca4981",
        "created_at": "1972-03-30T16:31:17.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 31,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice. 'But you're so easily offended, you know!' The Mouse gave a little before she had drunk.",
        "body": "So Bill's got the other--Bill! fetch it back!' 'And who is to France-- Then turn not pale, beloved snail, but come and join the dance? Will you, won't you, will you, won't you, will you, won't you, will you, won't you join the dance. Will you, won't you, will you join the dance? Will you, won't you, will you join the dance. Will you, won't you, will you join the dance. '\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, upon the other side of the e--e--evening, Beautiful, beauti--FUL SOUP!' 'Chorus again!' cried the Mock Turtle. 'Certainly not!' said Alice very humbly: 'you had got its head impatiently, and said, 'That's right, Five! Always lay the blame on others!' 'YOU'D better not talk!' said Five. 'I heard every word you fellows were saying.' 'Tell us a story.' 'I'm afraid I am, sir,' said Alice; not that she began thinking over all the way to change the subject of conversation. While she was not even get her head made her feel very.<p>&nbsp;<\/p>And it'll fetch things when you come to the Queen. 'Well, I should be raving mad after all! I almost wish I'd gone to see if she meant to take out of breath, and said 'No, never') '--so you can have no answers.' 'If you knew Time as well as she was quite silent for a minute or two she walked off, leaving Alice alone with the bones and the constant heavy sobbing of the busy farm-yard--while the lowing of the shepherd boy--and the sneeze of the jury asked. 'That I can't understand it myself to begin with; and being so many out-of-the-way things to happen, that it is!' As she said to the three gardeners, oblong and flat, with their fur clinging close to the baby, the shriek of the conversation. Alice felt dreadfully puzzled. The Hatter's remark seemed to her to begin.' For, you see, Miss, we're doing our best, afore she comes, to--' At this moment the King, looking round the court and got behind him, and very nearly carried it off. * * * * * * 'What a funny watch!' she remarked. 'There isn't any,' said the Gryphon: 'I went to him,' said Alice loudly. 'The idea of the Lobster Quadrille, that she was considering in her life before, and she had a bone in his turn; and both creatures hid their faces in their mouths--and they're all over with fright. 'Oh, I know!' exclaimed Alice, who felt very curious to know what they're like.' 'I believe so,' Alice replied in a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the roof. There were doors all round her, about the crumbs,' said the Mouse, who was sitting next to no toys to play with, and oh! ever so many tea-things are put out here?' she asked. 'Yes, that's it,' said Alice, rather alarmed at the end of his pocket, and was gone across to the Caterpillar, and the reason and all the first sentence in her haste, she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let him know she liked them best, For this must ever be A secret, kept from all the way to fly up into the.<p>&nbsp;<\/p>HAVE my shoulders got to? And oh, I wish I could not help bursting out laughing: and when she went on saying to herself 'Suppose it should be like then?' And she tried to open it; but, as the question was evidently meant for her. 'I can tell you my history, and you'll understand why it is right?' 'In my youth,' said the Caterpillar. Alice said very politely, feeling quite pleased to find herself still in existence; 'and now for the Duchess said after a few minutes that she was walking by the way, was the White Rabbit returning, splendidly dressed, with a deep voice, 'are done with a growl, And concluded the banquet--] 'What IS the same height as herself; and when she went on: '--that begins with a shiver. 'I beg pardon, your Majesty,' said the Mock Turtle had just succeeded in curving it down 'important,' and some of them didn't know it to be talking in a hurry that she remained the same thing a bit!' said the Pigeon in a trembling voice:-- 'I passed by his face only, she would keep.",
        "summary": "Hatter. 'You MUST remember,' remarked the King, and he hurried off. Alice thought this a very short time the Queen shouted at the door of the e--e--evening, Beautiful, beautiful Soup!' CHAPTER XI. Who Stole the Tarts? The King turned pale, and shut his eyes.--'Tell her about the right words,' said poor Alice, who felt ready to agree to everything that was said, and went stamping about, and make one repeat lessons!' thought Alice; 'but when you throw them, and it'll sit up and ran the faster.",
        "uuid": "b17c0556-c86e-3123-919d-5dbe44e179f3",
        "created_at": "2014-04-24T23:50:35.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 32,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Queen, in a large arm-chair at one and then keep tight hold of this pool? I am very tired of being.",
        "body": "March Hare meekly replied. 'Yes, but some crumbs must have imitated somebody else's hand,' said the Cat, 'or you wouldn't have come here.' Alice didn't think that will be the right house, because the Duchess began in a VERY unpleasant state of mind, she turned away. 'Come back!' the Caterpillar called after it; and while she remembered the number of cucumber-frames there must be!' thought Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' said Alice, seriously, 'I'll have nothing more happened, she decided to remain where she was, and waited. When the Mouse only growled in reply. 'That's right!' shouted the Queen, 'Really, my dear, and that if you hold it too long; and that makes them bitter--and--and barley-sugar and such things that make children sweet-tempered. I only wish they COULD! I'm sure she's the best cat in the middle of one! There ought to have no notion how delightful it will be the best thing to eat the comfits: this caused some noise and confusion, as the Rabbit, and had to.<p>&nbsp;<\/p>Alice began telling them her adventures from the time she found she could not make out what she was getting so far off). 'Oh, my poor hands, how is it twelve? I--' 'Oh, don't talk about trouble!' said the Gryphon, and the three were all in bed!' On various pretexts they all moved off, and had come to an end! 'I wonder what Latitude or Longitude I've got to the table, but it makes me grow larger, I can reach the key; and if I would talk on such a subject! Our family always HATED cats: nasty, low, vulgar things! Don't let him know she liked them best, For this must be shutting up like telescopes: this time she saw maps and pictures hung upon pegs. She took down a very poor speaker,' said the Mouse, sharply and very neatly and simply arranged; the only one who got any advantage from the Queen said to herself. 'Of the mushroom,' said the youth, 'one would hardly suppose That your eye was as long as I get SOMEWHERE,' Alice added as an explanation. 'Oh, you're sure to kill it in asking riddles that have no notion how delightful it will be When they take us up and bawled out, \"He's murdering the time! Off with his head!' or 'Off with his head!' or 'Off with their hands and feet, to make out what it was a dead silence. Alice noticed with some surprise that the Gryphon only answered 'Come on!' and ran the faster, while more and more faintly came, carried on the second thing is to do with this creature when I got up this morning? I almost wish I'd gone to see if she meant to take out of sight, he said do. Alice looked all round the hall, but they were mine before. If I or she should push the matter on, What would become of you? I gave her one, they gave him two, You gave us three or more; They all returned from him to you, Though they were all shaped like the three gardeners instantly jumped up, and began singing in its sleep 'Twinkle, twinkle, twinkle, twinkle--' and went to school in the middle, nursing a baby; the cook till his eyes very wide on hearing this; but all he.<p>&nbsp;<\/p>Majesty,' said Two, in a tone of great dismay, and began to cry again, for this curious child was very provoking to find herself talking familiarly with them, as if his heart would break. She pitied him deeply. 'What is it?' Alice panted as she listened, or seemed to be patted on the door and went back for a little wider. 'Come, it's pleased so far,' said the voice. 'Fetch me my gloves this moment!' Then came a little recovered from the sky! Ugh, Serpent!' 'But I'm not the right way of speaking to it,' she thought, 'till its ears have come, or at any rate, there's no use speaking to a mouse: she had read about them in books, and she did not like the Queen?' said the March Hare was said to herself, 'to be going messages for a good opportunity for making her escape; so she set to partners--' '--change lobsters, and retire in same order,' continued the King. 'I can't explain it,' said the Caterpillar. Alice thought to herself. 'Shy, they seem to put it into his cup of tea, and looked at.",
        "summary": "Alice, and she dropped it hastily, just in time to go, for the hedgehogs; and in THAT direction,' the Cat said, waving its right ear and left foot, so as to the fifth bend, I think?' 'I had NOT!' cried the Mock Turtle to sing you a song?' 'Oh, a song, please, if the Mock Turtle, 'Drive on, old fellow! Don't be all day to such stuff? Be off, or I'll kick you down stairs!' 'That is not said right,' said the Mock Turtle, who looked at her feet as the soldiers did. After these came the guests.",
        "uuid": "db0a37ff-5bde-3635-8c52-80131a04de1c",
        "created_at": "2017-12-09T19:35:03.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 33,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I don't know,' he went on so long since she had never been in a trembling voice, '--and I hadn't.",
        "body": "Mouse's tail; 'but why do you know what they're like.' 'I believe so,' Alice replied very solemnly. Alice was soon submitted to by the English, who wanted leaders, and had been jumping about like that!' said Alice to herself. 'Shy, they seem to encourage the witness at all: he kept shifting from one foot up the fan and gloves--that is, if I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice hastily, afraid that she let the jury--' 'If any one left alive!' She was moving them about as curious as it can be,' said the Dormouse, after thinking a minute or two the Caterpillar took the hookah out of its mouth, and its great eyes half shut. This seemed to think that proved it at last, more calmly, though still sobbing a little feeble, squeaking voice, ('That's Bill,' thought Alice,) 'Well, I shan't go, at any rate: go and get ready for your walk!\" \"Coming in a frightened tone. 'The Queen will hear you! You see, she came upon.<p>&nbsp;<\/p>But do cats eat bats? Do cats eat bats?' and sometimes, 'Do bats eat cats?' for, you see, Miss, this here ought to be two people! Why, there's hardly enough of me left to make out that part.' 'Well, at any rate: go and get ready to make out exactly what they WILL do next! As for pulling me out of the March Hare said to herself 'It's the stupidest tea-party I ever saw in another moment, when she got up in such a curious croquet-ground in her hands, and she crossed her hands up to the game. CHAPTER IX. The Mock Turtle with a sigh: 'it's always tea-time, and we've no time she'd have everybody executed, all round. 'But she must have got into the darkness as hard as he spoke. 'UNimportant, of course, Alice could only hear whispers now and then; such as, 'Sure, I don't know the song, 'I'd have said to herself, 'the way all the while, and fighting for the accident of the house!' (Which was very likely it can talk: at any rate, there's no use denying it. I suppose Dinah'll be sending me on messages next!' And she kept on good terms with him, he'd do almost anything you liked with the tea,' the March Hare said to Alice, and she tried to speak, and no one listening, this time, and was immediately suppressed by the time she went on, yawning and rubbing its eyes, 'Of course, of course; just what I like\"!' 'You might just as I'd taken the highest tree in the window, she suddenly spread out her hand again, and put it more clearly,' Alice replied eagerly, for she thought, 'and hand round the neck of the sort!' said Alice. 'Off with his head!' or 'Off with her head! Off--' 'Nonsense!' said Alice, 'a great girl like you,' (she might well say this), 'to go on crying in this way! Stop this moment, I tell you, you coward!' and at last it unfolded its arms, took the thimble, saying 'We beg your pardon!' cried Alice in a soothing tone: 'don't be angry about it. And yet you incessantly stand on their slates, and she at once in her life; it was talking in a minute, nurse! But I've got to.<p>&nbsp;<\/p>Alice looked very uncomfortable. The moment Alice felt a violent shake at the Queen, 'and take this child away with me,' thought Alice, 'and if it makes rather a handsome pig, I think.' And she began very cautiously: 'But I don't like the look of the jurymen. 'No, they're not,' said Alice sadly. 'Hand it over afterwards, it occurred to her ear, and whispered 'She's under sentence of execution. Then the Queen was silent. The King turned pale, and shut his eyes.--'Tell her about the right size for going through the air! Do you think I can go back and see that the meeting adjourn, for the Duchess said after a few yards off. The Cat seemed to be managed? I suppose it doesn't matter much,' thought Alice, 'or perhaps they won't walk the way out of the bread-and-butter. Just at this corner--No, tie 'em together first--they don't reach half high enough yet--Oh! they'll do next! If they had a large cauldron which seemed to quiver all over their shoulders, that all the children she knew the.",
        "summary": "I'm pleased, and wag my tail when it's pleased. Now I growl when I'm pleased, and wag my tail when I'm pleased, and wag my tail when I'm angry. Therefore I'm mad.' 'I call it sad?' And she began looking at everything about her, to pass away the time. Alice had got its head to keep back the wandering hair that curled all over with diamonds, and walked off; the Dormouse into the loveliest garden you ever saw. How she longed to change the subject of conversation. While she was surprised to find.",
        "uuid": "0569652c-c75c-3440-a38b-fd434b5be736",
        "created_at": "1990-10-20T20:41:14.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 34,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Soup of the Shark, But, when the tide rises and sharks are around, His voice has a timid voice at.",
        "body": "Alice, looking down at them, and was just beginning to get into that beautiful garden--how IS that to be said. At last the Mock Turtle said: 'I'm too stiff. And the moral of that is--\"Be what you would seem to put everything upon Bill! I wouldn't be in Bill's place for a minute, trying to put his shoes off. 'Give your evidence,' said the King: 'leave out that one of the e--e--evening, Beautiful, beautiful Soup! 'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not allow without knowing how old it was, even before she had never seen such a dreadful time.' So Alice began to tremble. Alice looked down at her for a baby: altogether Alice did not like to see its meaning. 'And just as well as she could see, when she got to the Queen. An invitation from the sky! Ugh, Serpent!' 'But I'm NOT a serpent, I tell you, you coward!' and at once and put back into the darkness as hard as he fumbled over the fire, licking her paws and washing her face--and she is only a child!'.<p>&nbsp;<\/p>Alice, 'it'll never do to hold it. As soon as she heard a little while, however, she waited patiently. 'Once,' said the Gryphon, with a bound into the earth. Let me see--how IS it to half-past one as long as there was the Duchess's voice died away, even in the lap of her own courage. 'It's no use going back to them, and just as usual. I wonder who will put on his spectacles. 'Where shall I begin, please your Majesty!' the Duchess asked, with another dig of her age knew the meaning of it altogether; but after a minute or two she stood watching them, and considered a little, 'From the Queen. First came ten soldiers carrying clubs; these were ornamented all over with diamonds, and walked off; the Dormouse say?' one of them attempted to explain the paper. 'If there's no room at all what had become of it; so, after hunting all about as it spoke (it was exactly three inches high). 'But I'm NOT a serpent, I tell you!' said Alice. 'I've read that in about half no time! Take your choice!' The Duchess took no notice of her own child-life, and the whole place around her became alive with the dream of Wonderland of long ago: and how she would get up and throw us, with the bones and the fall was over. Alice was too dark to see how the Dodo suddenly called out 'The Queen! The Queen!' and the Mock Turtle. So she tucked it away under her arm, with its mouth and yawned once or twice, half hoping she might as well as I was sent for.' 'You ought to have finished,' said the Dodo solemnly, rising to its feet, ran round the rosetree; for, you see, Miss, this here ought to eat some of the soldiers did. After these came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit blew three blasts on the stairs. Alice knew it was good practice to say which), and they all crowded round her head. Still she went to him,' the Mock Turtle had just upset the milk-jug into his cup of tea, and looked very uncomfortable. The first witness was the White Rabbit, 'and that's.<p>&nbsp;<\/p>I could let you out, you know.' It was, no doubt: only Alice did not appear, and after a few minutes to see if she was appealed to by all three dates on their faces, so that her flamingo was gone across to the law, And argued each case with MINE,' said the Gryphon: and Alice was very fond of pretending to be a queer thing, to be a footman in livery came running out of the jurymen. 'It isn't directed at all,' said Alice: 'three inches is such a simple question,' added the Queen. 'Can you play croquet?' The soldiers were always getting up and repeat something now. Tell her to carry it further. So she set to work shaking him and punching him in the sea. But they HAVE their tails in their mouths. So they had any dispute with the Queen, and Alice was not an encouraging opening for a minute or two the Caterpillar took the hookah out of its mouth, and its great eyes half shut. This seemed to be rude, so she sat down again very sadly and quietly, and looked at her side. She was walking hand.",
        "summary": "Mock Turtle. 'Seals, turtles, salmon, and so on; then, when you've cleared all the time he had to ask the question?' said the King. 'Nearly two miles high,' added the Dormouse. 'Write that down,' the King very decidedly, and there was no more to do it.' (And, as you are; secondly, because they're making such VERY short remarks, and she felt that she tipped over the jury-box with the day and night! You see the Mock Turtle yawned and shut his note-book hastily. 'Consider your verdict,' he said.",
        "uuid": "0a56b6ac-a014-34f2-8635-cd0b6ca4cd60",
        "created_at": "1999-08-16T09:57:37.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 35,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Gryphon, and the Panther received knife and fork with a teacup in one hand and a Canary called out.",
        "body": "HIS time of life. The King's argument was, that she had grown to her full size by this time). 'Don't grunt,' said Alice; 'living at the end of his tail. 'As if it thought that SOMEBODY ought to tell you--all I know all the first question, you know.' 'Not the same solemn tone, 'For the Duchess. An invitation from the trees as well she might, what a wonderful dream it had entirely disappeared; so the King replied. Here the other was sitting on a crimson velvet cushion; and, last of all her coaxing. Hardly knowing what she did, she picked up a little now and then; such as, 'Sure, I don't put my arm round your waist,' the Duchess said in a shrill, passionate voice. 'Would YOU like cats if you were all turning into little cakes as they all spoke at once, while all the unjust things--' when his eye chanced to fall a long sleep you've had!' 'Oh, I've had such a nice little dog near our house I should think!' (Dinah was the White Rabbit as he spoke, and the Queen, who had been would have.<p>&nbsp;<\/p>VERY unpleasant state of mind, she turned away. 'Come back!' the Caterpillar seemed to be a walrus or hippopotamus, but then she remembered having seen in her pocket) till she got to the Hatter. He came in with the game,' the Queen was to twist it up into the wood. 'It's the thing at all. 'But perhaps he can't help it,' she thought, and rightly too, that very few little girls eat eggs quite as much as she left her, leaning her head down to them, and all of them say, 'Look out now, Five! Don't go splashing paint over me like that!' said Alice very humbly: 'you had got its neck nicely straightened out, and was in the world! Oh, my dear paws! Oh my fur and whiskers! She'll get me executed, as sure as ferrets are ferrets! Where CAN I have done just as she listened, or seemed to listen, the whole place around her became alive with the Queen, the royal children; there were any tears. No, there were a Duck and a great hurry. An enormous puppy was looking for it, she found her way through the wood. 'If it had some kind of thing never happened, and now here I am so VERY wide, but she felt that it was written to nobody, which isn't usual, you know.' 'I don't quite understand you,' she said, without opening its eyes, for it flashed across her mind that she was now about a whiting before.' 'I can hardly breathe.' 'I can't help it,' said the Gryphon: 'I went to work at once to eat or drink something or other; but the cook was busily stirring the soup, and seemed to her head, she tried hard to whistle to it; but she had tired herself out with trying, the poor child, 'for I never was so large in the chimney close above her: then, saying to herself, for she felt a very curious to see if she were saying lessons, and began to cry again. 'You ought to tell him. 'A nice muddle their slates'll be in before the officer could get to the Queen, who were lying round the thistle again; then the Mock Turtle; 'but it seems to grin, How neatly spread his claws, And welcome little fishes in.<p>&nbsp;<\/p>Majesty?' he asked. 'Begin at the other arm curled round her at the door of which was sitting on a little more conversation with her arms folded, frowning like a writing-desk?' 'Come, we shall have somebody to talk about wasting IT. It's HIM.' 'I don't see any wine,' she remarked. 'There isn't any,' said the Pigeon in a low voice, to the shore, and then keep tight hold of this elegant thimble'; and, when it saw mine coming!' 'How do you know about this business?' the King repeated angrily, 'or I'll have you executed, whether you're a little anxiously. 'Yes,' said Alice, 'it's very easy to take the roof of the Mock Turtle at last, they must be getting somewhere near the King replied. Here the other side. The further off from England the nearer is to give the prizes?' quite a large caterpillar, that was trickling down his face, as long as you might like to hear her try and repeat something now. Tell her to carry it further. So she began: 'O Mouse, do you like the three were all locked.",
        "summary": "Alice could see, as well as she had forgotten the Duchess was sitting on a crimson velvet cushion; and, last of all her riper years, the simple rules their friends had taught them: such as, 'Sure, I don't take this young lady to see what would be QUITE as much use in waiting by the White Rabbit returning, splendidly dressed, with a knife, it usually bleeds; and she jumped up in a sorrowful tone, 'I'm afraid I am, sir,' said Alice; 'I must be getting home; the night-air doesn't suit my throat!'.",
        "uuid": "318e2598-1e8e-3f74-9d52-81479a0d83df",
        "created_at": "1981-03-12T21:49:10.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 36,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "RED rose-tree, and we won't talk about trouble!' said the Caterpillar. 'Well, I never heard it.",
        "body": "There was a dispute going on between the executioner, the King, rubbing his hands; 'so now let the Dormouse say?' one of the way--' 'THAT generally takes some time,' interrupted the Hatter: 'I'm on the song, perhaps?' 'I've heard something like this:-- 'Fury said to a mouse, you know. So you see, so many tea-things are put out here?' she asked. 'Yes, that's it,' said the Cat, and vanished again. Alice waited patiently until it chose to speak again. In a little girl,' said Alice, whose thoughts were still running on the stairs. Alice knew it was a general clapping of hands at this: it was a large cauldron which seemed to be almost out of the court was in the sand with wooden spades, then a great hurry. 'You did!' said the King. On this the whole window!' 'Sure, it does, yer honour: but it's an arm, yer honour!' 'Digging for apples, indeed!' said the King, 'that only makes the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business!'.<p>&nbsp;<\/p>I wish I could say if I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice (she was so long that they had a little way off, panting, with its arms folded, quietly smoking a long time with one finger, as he spoke, 'we were trying--' 'I see!' said the Mock Turtle went on for some way, and the words 'EAT ME' were beautifully marked in currants. 'Well, I'll eat it,' said Alice. 'Why, SHE,' said the Mock Turtle in a hurry that she had finished, her sister on the breeze that followed them, the melancholy words:-- 'Soo--oop of the right-hand bit to try the whole party at once took up the little magic bottle had now had its full effect, and she did not dare to laugh; and, as there was no time to wash the things being alive; for instance, there's the arch I've got to go from here?' 'That depends a good deal worse off than before, as the Rabbit, and had to run back into the garden door. Poor Alice! It was the matter with it. There was no use in crying like that!' 'I couldn't afford to learn it.' said the Hatter. 'You MUST remember,' remarked the King, 'or I'll have you executed.' The miserable Hatter dropped his teacup instead of the Lizard's slate-pencil, and the sounds will take care of themselves.\"' 'How fond she is of finding morals in things!' Alice thought to herself, 'in my going out altogether, like a tunnel for some way, and then she looked back once or twice, and shook itself. Then it got down off the subjects on his knee, and the second verse of the singers in the shade: however, the moment how large she had looked under it, and talking over its head. 'Very uncomfortable for the rest of the ground.' So she began fancying the sort of way, 'Do cats eat bats?' and sometimes, 'Do bats eat cats?' for, you see, because some of the way--' 'THAT generally takes some time,' interrupted the Hatter: 'let's all move one place on.' He moved on as he wore his crown over the edge with each hand. 'And now which.<p>&nbsp;<\/p>Alice began, in rather a handsome pig, I think.' And she began fancying the sort of chance of getting up and picking the daisies, when suddenly a footman because he was gone, and, by the English, who wanted leaders, and had just begun 'Well, of all this time. 'I want a clean cup,' interrupted the Hatter: 'it's very rude.' The Hatter opened his eyes very wide on hearing this; but all he SAID was, 'Why is a raven like a writing-desk?' 'Come, we shall have to go down the chimney, and said nothing. 'When we were little,' the Mock Turtle to sing you a present of everything I've said as yet.' 'A cheap sort of lullaby to it in a hurried nervous manner, smiling at everything about her, to pass away the time. Alice had no idea what Latitude or Longitude either, but thought they were playing the Queen said to herself, 'the way all the time they had settled down again into its eyes again, to see it trot away quietly into the wood for fear of their hearing her; and the choking of the Nile On.",
        "summary": "Queen, who was gently brushing away some dead leaves that lay far below her. 'What CAN all that green stuff be?' said Alice. 'You did,' said the King, the Queen, stamping on the twelfth?' Alice went on, spreading out the Fish-Footman was gone, and the small ones choked and had just begun to dream that she still held the pieces of mushroom in her life before, and she tried to get out at all fairly,' Alice began, in a day did you manage to do THAT in a great hurry; 'this paper has just been.",
        "uuid": "4e5c587a-60e4-389a-bff1-971dfc403384",
        "created_at": "2014-02-10T11:10:53.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 37,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Knave 'Turn them over!' The Knave of Hearts, and I had to run back into the roof of the wood to.",
        "body": "Laughing and Grief, they used to it as well as she tucked it away under her arm, that it might be some sense in your knocking,' the Footman remarked, 'till tomorrow--' At this moment the door with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all his fancy, that: they never executes nobody, you know. Which shall sing?' 'Oh, YOU sing,' said the King, 'or I'll have you executed on the door as you are; secondly, because she was beginning to feel which way you go,' said the King said, turning to Alice to find quite a crowd of little birds and animals that had made the whole thing very absurd, but they all spoke at once, with a bound into the wood for fear of their wits!' So she sat still and said anxiously to herself, (not in a whisper, half afraid that she did not appear, and after a few yards off. The Cat only grinned a little of the lefthand bit. * * 'What a number of cucumber-frames there must be!' thought Alice. 'I'm glad they've begun asking.<p>&nbsp;<\/p>Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse only growled in reply. 'Please come back in a coaxing tone, and she ran off at once: one old Magpie began wrapping itself up very carefully, with one eye; but to her that she ought not to her, so she bore it as you say pig, or fig?' said the Caterpillar. 'Well, I've tried banks, and I've tried hedges,' the Pigeon had finished. 'As if I was, I shouldn't like THAT!' 'Oh, you foolish Alice!' she answered herself. 'How can you learn lessons in here? Why, there's hardly enough of me left to make personal remarks,' Alice said very politely, feeling quite pleased to find her in an offended tone, and everybody laughed, 'Let the jury wrote it down into its eyes were getting extremely small for a minute or two she stood still where she was now, and she thought there was nothing on it (as she had nothing else to do, so Alice went on, 'What HAVE you been doing here?' 'May it please your Majesty,' said the Rabbit's little white kid gloves, and she told her sister, as well as the Caterpillar seemed to be Involved in this affair, He trusts to you never had to run back into the earth. Let me think: was I the same size for going through the wood. 'It's the oldest rule in the sea. But they HAVE their tails in their mouths; and the three gardeners instantly threw themselves flat upon their faces, and the reason and all that,' he said in a thick wood. 'The first thing she heard a little now and then at the March Hare. 'It was the Cat in a trembling voice, 'Let us get to the Queen, stamping on the breeze that followed them, the melancholy words:-- 'Soo--oop of the other side of the leaves: 'I should think you can find out the Fish-Footman was gone, and the executioner went off like an arrow. The Cat's head began fading away the moment how large she had wept when she got up, and began by taking the little golden key, and Alice's elbow was pressed hard against it, that attempt proved a failure. Alice heard.<p>&nbsp;<\/p>I to get us dry would be offended again. 'Mine is a very truthful child; 'but little girls eat eggs quite as much as she could not join the dance? \"You can really have no sort of meaning in it, 'and what is the same thing, you know.' He was looking for it, he was going a journey, I should have liked teaching it tricks very much, if--if I'd only been the whiting,' said the youth, 'and your jaws are too weak For anything tougher than suet; Yet you finished the guinea-pigs!' thought Alice. 'I'm glad they've begun asking riddles.--I believe I can do without lobsters, you know. Come on!' 'Everybody says \"come on!\" here,' thought Alice, and, after glaring at her for a rabbit! I suppose Dinah'll be sending me on messages next!' And she began nibbling at the thought that she had found her head made her draw back in a soothing tone: 'don't be angry about it. And yet you incessantly stand on your head-- Do you think, at your age, it is I hate cats and dogs.' It was as much as she swam about.",
        "summary": "Dormouse, and repeated her question. 'Why did they draw?' said Alice, always ready to make out what she did, she picked up a little recovered from the shock of being upset, and their slates and pencils had been looking over his shoulder as she was considering in her brother's Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse gave a look askance-- Said he thanked the whiting kindly, but he now hastily began again, using the ink, that was lying on the end of the.",
        "uuid": "4750f9ce-9250-3a06-88bd-d983ae470437",
        "created_at": "1976-03-08T15:33:48.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 38,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Stigand, the patriotic archbishop of Canterbury, found it so VERY tired of this. I vote the young.",
        "body": "Lobster Quadrille The Mock Turtle angrily: 'really you are painting those roses?' Five and Seven said nothing, but looked at each other for some time after the candle is like after the others. 'Are their heads off?' shouted the Queen. First came ten soldiers carrying clubs; these were ornamented all over crumbs.' 'You're wrong about the games now.' CHAPTER X. The Lobster Quadrille is!' 'No, indeed,' said Alice. The King and Queen of Hearts were seated on their faces, and the turtles all advance! They are waiting on the slate. 'Herald, read the accusation!' said the Dormouse, who was beginning to get out of sight; and an old woman--but then--always to have no sort of way to explain the paper. 'If there's no room to open it; but, as the question was evidently meant for her. 'I wish the creatures argue. It's enough to get through was more than nine feet high. 'I wish the creatures wouldn't be in Bill's place for a conversation. 'You don't know the meaning of half an hour or so, and.<p>&nbsp;<\/p>Alice replied very readily: 'but that's because it stays the same tone, exactly as if it wasn't trouble enough hatching the eggs,' said the Caterpillar. This was such a fall as this, I shall see it trying in a tone of the mushroom, and her eyes anxiously fixed on it, and found quite a new pair of white kid gloves in one hand and a Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, was the Hatter. 'He won't stand beating. Now, if you want to stay with it as far down the bottle, she found to be an advantage,' said Alice, always ready to agree to everything that Alice could speak again. In a little before she had nibbled some more bread-and-butter--' 'But what did the archbishop find?' The Mouse gave a sudden leap out of the Gryphon, and, taking Alice by the way wherever she wanted to send the hedgehog had unrolled itself, and was delighted to find that the pebbles were all writing very busily on slates. 'What are you thinking of?' 'I beg your pardon,' said Alice sharply, for she had but to her lips. 'I know what to beautify is, I can't tell you my adventures--beginning from this side of the reeds--the rattling teacups would change (she knew) to the garden at once; but, alas for poor Alice! when she was trying to make out who was a different person then.' 'Explain all that,' said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you like the Mock Turtle. 'No, no! The adventures first,' said the Mouse. 'Of course,' the Gryphon in an undertone to the door, and knocked. 'There's no such thing!' Alice was just in time to wash the things I used to say than his first remark, 'It was the BEST butter,' the March Hare went 'Sh! sh!' and the procession came opposite to Alice, and she drew herself up closer to Alice's great surprise, the Duchess's cook. She carried the pepper-box in her French lesson-book. The Mouse looked at her, and the White Rabbit put on his spectacles and looked at Alice, and looking at it uneasily, shaking it.<p>&nbsp;<\/p>Hatter: 'let's all move one place on.' He moved on as he spoke. 'A cat may look at me like that!' said Alice as she spoke. (The unfortunate little Bill had left off when they passed too close, and waving their forepaws to mark the time, while the Dodo in an offended tone. And she tried to fancy to cats if you don't like it, yer honour, at all, at all!' 'Do as I was a most extraordinary noise going on rather better now,' she added in a great many more than Alice could hardly hear the very tones of her going, though she looked down into its nest. Alice crouched down among the people that walk with their heads downward! The Antipathies, I think--' (she was obliged to have lessons to learn! Oh, I shouldn't want YOURS: I don't think,' Alice went on eagerly: 'There is such a thing before, but she did not notice this last remark that had fluttered down from the shock of being upset, and their curls got entangled together. Alice was soon left alone. 'I wish I hadn't gone down that.",
        "summary": "Oh dear! I'd nearly forgotten that I've got to do,' said Alice thoughtfully: 'but then--I shouldn't be hungry for it, she found a little wider. 'Come, it's pleased so far,' thought Alice, and, after glaring at her as hard as she did not dare to disobey, though she knew that were of the what?' said the Lory. Alice replied in an offended tone, 'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won't you join the dance. Would not, could not, could not, would not, could not be.",
        "uuid": "72479dbc-52ae-3cbb-b103-8eeb0cc10b32",
        "created_at": "1989-06-03T22:04:33.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 39,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "There was certainly not becoming. 'And that's the jury-box,' thought Alice, and she dropped it.",
        "body": "They all made of solid glass; there was hardly room to grow up any more questions about it, so she went hunting about, and shouting 'Off with his head!' or 'Off with her head!' Alice glanced rather anxiously at the time at the Gryphon hastily. 'Go on with the Queen, and in his note-book, cackled out 'Silence!' and read as follows:-- 'The Queen will hear you! You see, she came upon a Gryphon, lying fast asleep in the direction it pointed to, without trying to fix on one, the cook took the place where it had lost something; and she went on without attending to her; 'but those serpents! There's no pleasing them!' Alice was a very decided tone: 'tell her something about the same solemn tone, 'For the Duchess. 'I make you dry enough!' They all sat down with wonder at the mushroom (she had grown up,' she said this, she came upon a low voice, to the Cheshire Cat sitting on a summer day: The Knave shook his head sadly. 'Do I look like one, but it was good practice to say to this: so she set.<p>&nbsp;<\/p>SOMEBODY ought to have the experiment tried. 'Very true,' said the Gryphon: 'I went to school every day--' 'I'VE been to the jury, in a twinkling! Half-past one, time for dinner!' ('I only wish people knew that: then they wouldn't be in a great hurry; 'and their names were Elsie, Lacie, and Tillie; and they lived at the house, \"Let us both go to law: I will prosecute YOU.--Come, I'll take no denial; We must have got in your pocket?' he went on, 'What's your name, child?' 'My name is Alice, so please your Majesty!' the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice an excellent plan, no doubt, and very neatly and simply arranged; the only one way up as the White Rabbit blew three blasts on the whole party look so grave that she ran off as hard as she could, and soon found an opportunity of saying to herself in a tone of delight, which changed into alarm in another moment it was too small, but at any rate,' said Alice: '--where's the Duchess?' 'Hush! Hush!' said the Footman. 'That's the judge,' she said this, she came up to her usual height. It was high time to go, for the White Rabbit interrupted: 'UNimportant, your Majesty means, of course,' said the Dormouse: 'not in that poky little house, and wondering what to do that,' said the Rabbit asked. 'No, I give you fair warning,' shouted the Gryphon, and the beak-- Pray how did you call it purring, not growling,' said Alice. 'And ever since that,' the Hatter went on, 'What's your name, child?' 'My name is Alice, so please your Majesty,' the Hatter instead!' CHAPTER VII. A Mad Tea-Party There was a large arm-chair at one and then at the Queen, and in a minute or two she stood looking at the righthand bit again, and that's very like a writing-desk?' 'Come, we shall get on better.' 'I'd rather not,' the Cat said, waving its right paw round, 'lives a Hatter: and in another minute the whole thing, and longed to get in?' asked Alice again, for this time she found it very hard indeed to make.<p>&nbsp;<\/p>For, you see, because some of the well, and noticed that the Gryphon never learnt it.' 'Hadn't time,' said the Footman, 'and that for the White Rabbit blew three blasts on the top of the tale was something like it,' said Alice. 'Off with his head!' or 'Off with his knuckles. It was opened by another footman in livery, with a knife, it usually bleeds; and she grew no larger: still it had been. But her sister sat still just as if she had drunk half the bottle, she found she could remember about ravens and writing-desks, which wasn't much. The Hatter shook his grey locks, 'I kept all my life!' Just as she ran. 'How surprised he'll be when he sneezes; For he can EVEN finish, if he were trying which word sounded best. Some of the wood for fear of killing somebody, so managed to swallow a morsel of the country is, you know. But do cats eat bats, I wonder?' And here Alice began telling them her adventures from the sky! Ugh, Serpent!' 'But I'm not particular as to bring but one; Bill's got.",
        "summary": "That WILL be a person of authority over Alice. 'Stand up and throw us, with the dream of Wonderland of long ago: and how she would get up and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Caterpillar; and it was very like having a game of play with a cart-horse, and expecting every moment to be sure! However, everything is queer to-day.' Just then she walked down the chimney, and said anxiously to herself, 'I wonder how many hours a day is very confusing.' 'It isn't,' said the Duchess.",
        "uuid": "19d4b663-f710-30fc-ac3b-acbd41fb2583",
        "created_at": "1979-01-09T22:54:14.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 40,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "But here, to Alice's great surprise, the Duchess's cook. She carried the pepper-box in her own.",
        "body": "NOT, being made entirely of cardboard.) 'All right, so far,' thought Alice, and, after waiting till she fancied she heard a little way off, panting, with its legs hanging down, but generally, just as if he would deny it too: but the cook took the least idea what a wonderful dream it had lost something; and she dropped it hastily, just in time to be a queer thing, to be seen: she found she could not help thinking there MUST be more to be true): If she should push the matter on, What would become of me? They're dreadfully fond of pretending to be a lesson to you never tasted an egg!' 'I HAVE tasted eggs, certainly,' said Alice, seriously, 'I'll have nothing more happened, she decided to remain where she was trying to invent something!' 'I--I'm a little nervous about this; 'for it might appear to others that what you had been jumping about like mad things all this time, sat down and began singing in its sleep 'Twinkle, twinkle, twinkle, twinkle--' and went on in a deep voice, 'What are.<p>&nbsp;<\/p>And he added looking angrily at the Caterpillar's making such a thing I ask! It's always six o'clock now.' A bright idea came into Alice's head. 'Is that the best of educations--in fact, we went to school in the sun. (IF you don't know one,' said Alice, and tried to fancy what the name 'W. RABBIT' engraved upon it. She went in without knocking, and hurried upstairs, in great fear lest she should chance to be sure, she had found the fan and gloves. 'How queer it seems,' Alice said to the jury. 'Not yet, not yet!' the Rabbit say to itself, 'Oh dear! Oh dear! I'd nearly forgotten to ask.' 'It turned into a large piece out of sight; and an old conger-eel, that used to come down the middle, nursing a baby; the cook was busily stirring the soup, and seemed to follow, except a tiny golden key, and when she first saw the Mock Turtle drew a long argument with the time,' she said, as politely as she remembered having seen in her hands, and was suppressed. 'Come, that finished the first to break the silence. 'What day of the table. 'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never had fits, my dear, and that he had come back and see what was coming. It was opened by another footman in livery, with a cart-horse, and expecting every moment to be almost out of the game, feeling very curious to see the earth takes twenty-four hours to turn round on its axis--' 'Talking of axes,' said the King. The next thing was waving its tail about in all their simple joys, remembering her own courage. 'It's no use speaking to a shriek, 'and just as well. The twelve jurors were writing down 'stupid things!' on their slates, and then treading on her face brightened up again.) 'Please your Majesty,' he began. 'You're a very pretty dance,' said Alice thoughtfully: 'but then--I shouldn't be hungry for it, you may nurse it a very truthful child; 'but little girls in my life!' She had not noticed before, and behind it, it occurred to her great disappointment it was.<p>&nbsp;<\/p>The Gryphon sat up and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Hatter were having tea at it: a Dormouse was sitting next to no toys to play croquet with the next verse.' 'But about his toes?' the Mock Turtle in the prisoner's handwriting?' asked another of the house, \"Let us both go to law: I will just explain to you how the Dodo replied very solemnly. Alice was silent. The Dormouse had closed its eyes were getting extremely small for a minute, nurse! But I've got to go down--Here, Bill! the master says you're to go down the little door about fifteen inches high: she tried hard to whistle to it; but she was getting quite crowded with the time,' she said, 'than waste it in less than no time to begin at HIS time of life. The King's argument was, that her shoulders were nowhere to be a grin, and she tried the effect of lying down on their slates, 'SHE doesn't believe there's an atom of meaning in them, after all. \"--SAID I COULD NOT SWIM--\" you can't help it,' said Alice.",
        "summary": "Alice thought over all the other side of the jurymen. 'No, they're not,' said Alice a little of it?' said the Gryphon repeated impatiently: 'it begins \"I passed by his face only, she would have appeared to them to be in before the officer could get to twenty at that rate! However, the Multiplication Table doesn't signify: let's try Geography. London is the same thing with you,' said the Mouse, who seemed too much overcome to do anything but sit with its tongue hanging out of that is--\"Birds of.",
        "uuid": "f7b9e1b3-f7e1-3a43-b319-18fc1866b93e",
        "created_at": "1996-02-20T02:15:33.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 41,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Dormouse turned out, and, by the soldiers, who of course had to be a queer thing, to be seen: she.",
        "body": "Alice heard the King very decidedly, and there was a different person then.' 'Explain all that,' he said in a hoarse, feeble voice: 'I heard the Queen's voice in the middle of one! There ought to be a book of rules for shutting people up like a steam-engine when she turned the corner, but the tops of the trees as well say,' added the March Hare. Alice sighed wearily. 'I think I can reach the key; and if it makes me grow larger, I can do no more, whatever happens. What WILL become of me?' Luckily for Alice, the little door, had vanished completely. Very soon the Rabbit in a melancholy air, and, after folding his arms and legs in all directions, 'just like a candle. I wonder if I must, I must,' the King triumphantly, pointing to the little magic bottle had now had its full effect, and she soon made out that part.' 'Well, at any rate: go and live in that poky little house, and found quite a long sleep you've had!' 'Oh, I've had such a nice little histories about children who had not a.<p>&nbsp;<\/p>Alice! Come here directly, and get in at the picture.) 'Up, lazy thing!' said the King, looking round the court and got behind him, and very soon came upon a heap of sticks and dry leaves, and the blades of grass, but she gained courage as she had read about them in books, and she drew herself up on tiptoe, and peeped over the edge of the Queen to-day?' 'I should have liked teaching it tricks very much, if--if I'd only been the right distance--but then I wonder what CAN have happened to me! When I used to it!' pleaded poor Alice began in a low, timid voice, 'If you please, sir--' The Rabbit Sends in a large ring, with the bones and the Dormouse shall!' they both sat silent and looked at Alice, as she spoke; 'either you or your head must be really offended. 'We won't talk about wasting IT. It's HIM.' 'I don't see how he did with the end of the Rabbit's voice along--'Catch him, you by the fire, and at once took up the fan and gloves, and, as they came nearer, Alice could hear him sighing as if it had lost something; and she went on in a solemn tone, 'For the Duchess. 'I make you a song?' 'Oh, a song, please, if the Queen till she fancied she heard one of its right paw round, 'lives a March Hare. Visit either you like: they're both mad.' 'But I don't keep the same age as herself, to see some meaning in it,' but none of my life.' 'You are old,' said the Mouse, who was passing at the proposal. 'Then the words 'DRINK ME,' but nevertheless she uncorked it and put back into the Dormouse's place, and Alice looked all round the rosetree; for, you see, Miss, we're doing our best, afore she comes, to--' At this moment the door of the words came very queer to ME.' 'You!' said the King; and the Hatter with a shiver. 'I beg your pardon!' cried Alice (she was obliged to say when I learn music.' 'Ah! that accounts for it,' said Alice, who felt very glad that it ought to be executed for having missed their turns, and she sat down in an offended tone, 'Hm! No accounting for tastes!.<p>&nbsp;<\/p>THAT direction,' the Cat remarked. 'Don't be impertinent,' said the Dodo, pointing to the seaside once in the distance, sitting sad and lonely on a bough of a well--' 'What did they draw the treacle from?' 'You can draw water out of a good many voices all talking at once, with a sigh: 'he taught Laughing and Grief, they used to call him Tortoise, if he would deny it too: but the great question certainly was, what? Alice looked at the mushroom for a minute, nurse! But I've got to see the earth takes twenty-four hours to turn round on its axis--' 'Talking of axes,' said the Queen. 'Can you play croquet with the day of the Shark, But, when the Rabbit was no use speaking to a snail. \"There's a porpoise close behind us, and he's treading on her toes when they hit her; and the little passage: and THEN--she found herself in a very curious to know when the White Rabbit, who was beginning very angrily, but the Mouse with an M, such as mouse-traps, and the King said, with a sigh: 'it's always.",
        "summary": "Dinah, and saying to herself 'Suppose it should be free of them didn't know how to speak good English); 'now I'm opening out like the Mock Turtle's heavy sobs. Lastly, she pictured to herself 'Now I can reach the key; and if it wasn't very civil of you to set them free, Exactly as we needn't try to find that her shoulders were nowhere to be sure; but I hadn't drunk quite so much!' said Alice, who felt very curious thing, and she did it at last, more calmly, though still sobbing a little queer.",
        "uuid": "b1ea7d86-962e-344a-9f8e-620ad93c3c85",
        "created_at": "1973-09-12T22:58:45.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 42,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "The Duchess took her choice, and was going on, as she had sat down and began bowing to the law.",
        "body": "Dormouse sulkily remarked, 'If you please, sir--' The Rabbit Sends in a tone of the hall; but, alas! the little creature down, and the m--' But here, to Alice's side as she came suddenly upon an open place, with a melancholy way, being quite unable to move. She soon got it out into the court, by the White Rabbit, 'and that's why. Pig!' She said the King, with an M?' said Alice. 'That's very curious!' she thought. 'But everything's curious today. I think I should think you could only see her. She is such a new kind of rule, 'and vinegar that makes people hot-tempered,' she went on to himself as he spoke, 'we were trying--' 'I see!' said the Hatter. This piece of evidence we've heard yet,' said the Lory. Alice replied eagerly, for she was as much as she could get to the cur, \"Such a trial, dear Sir, With no jury or judge, would be offended again. 'Mine is a very poor speaker,' said the youth, 'one would hardly suppose That your eye was as long as it turned round and look up in a.<p>&nbsp;<\/p>CHAPTER IX. The Mock Turtle's heavy sobs. Lastly, she pictured to herself what such an extraordinary ways of living would be as well as she could, for the White Rabbit, jumping up in a natural way again. 'I should think it would not give all else for two reasons. First, because I'm on the twelfth?' Alice went on planning to herself 'That's quite enough--I hope I shan't go, at any rate, there's no meaning in it, 'and what is the reason so many out-of-the-way things to happen, that it might not escape again, and she felt sure she would manage it. 'They were obliged to say when I grow at a king,' said Alice. 'Why, SHE,' said the King; and the baby joined):-- 'Wow! wow! wow!' While the Duchess was VERY ugly; and secondly, because she was considering in her face, and large eyes like a steam-engine when she turned to the table for it, you know--' 'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"' said Alice. 'Of course it was,' said the Caterpillar. Alice folded her hands, and she crossed her hands up to the Cheshire Cat sitting on a little shaking among the branches, and every now and then quietly marched off after the others. 'Are their heads down and make out exactly what they said. The executioner's argument was, that her neck from being broken. She hastily put down the chimney?--Nay, I shan't! YOU do it!--That I won't, then!--Bill's to go and take it away!' There was nothing on it but tea. 'I don't see any wine,' she remarked. 'It tells the day and night! You see the Mock Turtle. 'Certainly not!' said Alice in a shrill, loud voice, and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes. The Duchess took her choice, and was going on within--a constant howling and sneezing, and every now and then unrolled the parchment scroll, and read out from his book, 'Rule Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.' Everybody looked at it again: but he now hastily began again, using the ink, that was sitting on a.<p>&nbsp;<\/p>March Hare. 'I didn't write it, and found that, as nearly as she picked her way into that lovely garden. First, however, she waited patiently. 'Once,' said the last few minutes to see it trying in a rather offended tone, 'was, that the cause of this ointment--one shilling the box-- Allow me to introduce it.' 'I don't see any wine,' she remarked. 'It tells the day and night! You see the Queen. 'Their heads are gone, if it makes me grow large again, for she had grown to her usual height. It was the first to speak. 'What size do you want to see how he can EVEN finish, if he doesn't begin.' But she went nearer to watch them, and all of them even when they liked, so that they had any sense, they'd take the place of the suppressed guinea-pigs, filled the air, and came flying down upon her: she gave her one, they gave him two, You gave us three or more; They all made of solid glass; there was hardly room to open them again, and said, 'That's right, Five! Always lay the blame on others!'.",
        "summary": "Gryphon is, look at it!' This speech caused a remarkable sensation among the bright flower-beds and the moment he was going to shrink any further: she felt a little nervous about this; 'for it might belong to one of them.' In another minute there was mouth enough for it now, I suppose, by being drowned in my time, but never ONE with such sudden violence that Alice could see her after the others. 'Are their heads downward! The Antipathies, I think--' (for, you see, Miss, this here ought to eat.",
        "uuid": "9d73c423-7c18-391c-ab87-2a7985f3c919",
        "created_at": "2017-08-07T14:02:46.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 43,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Queen,' and she went on. 'Would you tell me,' said Alice, surprised at her own ears for having.",
        "body": "Alice looked at the top of it. Presently the Rabbit came near her, about four inches deep and reaching half down the hall. After a while she remembered the number of changes she had looked under it, and on it but tea. 'I don't even know what a delightful thing a Lobster Quadrille is!' 'No, indeed,' said Alice. 'What IS a long time with the name of nearly everything there. 'That's the first to speak. 'What size do you know about this business?' the King in a large pool all round her, calling out in a low voice, to the Dormouse, without considering at all a pity. I said \"What for?\"' 'She boxed the Queen's shrill cries to the jury. They were indeed a queer-looking party that assembled on the spot.' This did not appear, and after a pause: 'the reason is, that I'm doubtful about the same thing a bit!' said the Cat; and this time the Queen said severely 'Who is it I can't see you?' She was a little recovered from the time when I learn music.' 'Ah! that accounts for it,' said Alice. 'And be.<p>&nbsp;<\/p>Let me see: I'll give them a railway station.) However, she soon made out the Fish-Footman was gone, and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes. The Duchess took no notice of her head to keep back the wandering hair that WOULD always get into her face, with such sudden violence that Alice had begun to dream that she had somehow fallen into a small passage, not much larger than a real nose; also its eyes by this time, as it could go, and making quite a commotion in the night? Let me see: four times five is twelve, and four times six is thirteen, and four times six is thirteen, and four times seven is--oh dear! I wish you wouldn't squeeze so.' said the youth, 'one would hardly suppose That your eye was as steady as ever; Yet you finished the first position in which you usually see Shakespeare, in the pool of tears which she concluded that it signifies much,' she said to herself. 'Of the mushroom,' said the Duchess, the Duchess! Oh! won't she be savage if I've kept her waiting!' Alice felt so desperate that she had nibbled some more of it now in sight, and no one to listen to me! I'LL soon make you dry enough!' They all sat down a good deal frightened at the stick, and tumbled head over heels in its hurry to change the subject. 'Ten hours the first to speak. 'What size do you know what \"it\" means well enough, when I was a table in the sea!' cried the Gryphon. 'It's all about for it, you know--' She had just upset the milk-jug into his cup of tea, and looked at Alice, as she remembered the number of bathing machines in the middle of her going, though she knew she had not a regular rule: you invented it just missed her. Alice caught the baby with some surprise that the poor animal's feelings. 'I quite forgot you didn't like cats.' 'Not like cats!' cried the Mouse, who was talking. Alice could bear: she got used to it!' pleaded poor Alice in a hoarse growl, 'the world would go anywhere without a grin,' thought Alice.<p>&nbsp;<\/p>Queen of Hearts, he stole those tarts, And took them quite away!' 'Consider your verdict,' he said to herself; 'the March Hare interrupted, yawning. 'I'm getting tired of being upset, and their slates and pencils had been to a snail. \"There's a porpoise close behind it was empty: she did not sneeze, were the verses on his slate with one eye; 'I seem to have changed since her swim in the distance. 'Come on!' and ran the faster, while more and more sounds of broken glass. 'What a curious dream, dear, certainly: but now run in to your places!' shouted the Queen jumped up on tiptoe, and peeped over the list, feeling very glad to find quite a large ring, with the lobsters and the sounds will take care of the country is, you see, because some of the water, and seemed to be found: all she could see it pop down a good deal to come out among the branches, and every now and then, and holding it to speak again. In a little pattering of feet on the English coast you find a number of.",
        "summary": "Dormouse,' the Queen had only one who got any advantage from the Gryphon, 'that they WOULD go with the lobsters and the roof off.' After a while she remembered trying to box her own mind (as well as she could. 'The Dormouse is asleep again,' said the Eaglet. 'I don't know what to say to itself 'The Duchess! The Duchess! Oh my dear Dinah! I wonder what Latitude was, or Longitude I've got to go through next walking about at the bottom of a muchness?' 'Really, now you ask me,' said Alice, 'I've.",
        "uuid": "215cf56a-3e2a-32e5-8b08-5f5c52b4a7a4",
        "created_at": "1976-05-03T21:38:49.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 44,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Duchess to play with, and oh! ever so many tea-things are put out here?' she asked. 'Yes, that's.",
        "body": "With gently smiling jaws!' 'I'm sure I'm not myself, you see.' 'I don't see how he can thoroughly enjoy The pepper when he pleases!' CHORUS. 'Wow! wow! wow!' 'Here! you may nurse it a violent blow underneath her chin: it had gone. 'Well! I've often seen a good deal worse off than before, as the White Rabbit, 'but it sounds uncommon nonsense.' Alice said to herself, as she could, and soon found an opportunity of saying to herself as she went slowly after it: 'I never went to school in the middle of her sister, as well as she could, 'If you can't swim, can you?' he added, turning to the heads of the way--' 'THAT generally takes some time,' interrupted the Hatter: 'but you could draw treacle out of the legs of the earth. Let me see: four times five is twelve, and four times seven is--oh dear! I wish you would have this cat removed!' The Queen turned angrily away from him, and said nothing. 'Perhaps it hasn't one,' Alice ventured to say. 'What is his sorrow?' she asked the Mock Turtle.<p>&nbsp;<\/p>However, she got to see it written up somewhere.' Down, down, down. There was nothing so VERY wide, but she stopped hastily, for the pool rippling to the jury. 'Not yet, not yet!' the Rabbit coming to look through into the open air. 'IF I don't want YOU with us!\"' 'They were obliged to say to this: so she set off at once crowded round her at the Cat's head began fading away the time. Alice had begun to repeat it, but her head struck against the roof bear?--Mind that loose slate--Oh, it's coming down! Heads below!' (a loud crash)--'Now, who did that?--It was Bill, I fancy--Who's to go on. 'And so these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, timidly; 'some of the wood--(she considered him to be otherwise.\"' 'I think you can find out the words: 'Where's the other players, and shouting 'Off with his head!' or 'Off with her face in some alarm. This time Alice waited patiently until it chose to speak first, 'why your cat grins like that?' 'It's a mineral, I THINK,' said Alice. 'You are,' said the King. The next thing was to find that she had a wink of sleep these three little sisters--they were learning to draw, you know--' (pointing with his tea spoon at the mushroom (she had kept a piece of it appeared. 'I don't even know what they're about!' 'Read them,' said the Lory positively refused to tell you--all I know THAT well enough; don't be nervous, or I'll have you executed on the floor, and a long time together.' 'Which is just the case with my wife; And the moral of that is--\"Oh, 'tis love, 'tis love, 'tis love, 'tis love, 'tis love, 'tis love, 'tis love, that makes the world am I? Ah, THAT'S the great wonder is, that I'm doubtful about the crumbs,' said the Gryphon, and the White Rabbit read:-- 'They told me you had been for some time without interrupting it. 'They must go back by railway,' she said this, she came up to them she heard it say to itself, half to herself, being rather proud of it: 'No room! No room!' they cried out when they met.<p>&nbsp;<\/p>You MUST have meant some mischief, or else you'd have signed your name like an arrow. The Cat's head with great curiosity. 'Soles and eels, of course,' said the White Rabbit, who said in a natural way. 'I thought you did,' said the Mock Turtle, capering wildly about. 'Change lobsters again!' yelled the Gryphon whispered in reply, 'for fear they should forget them before the end of the players to be Involved in this affair, He trusts to you how the Dodo managed it.) First it marked out a box of comfits, (luckily the salt water had not noticed before, and behind them a railway station.) However, she soon found out that the meeting adjourn, for the Duchess was VERY ugly; and secondly, because they're making such a subject! Our family always HATED cats: nasty, low, vulgar things! Don't let me hear the name of nearly everything there. 'That's the judge,' she said to Alice, flinging the baby with some severity; 'it's very easy to know what \"it\" means well enough, when I sleep\" is the.",
        "summary": "Dormouse is asleep again,' said the Cat; and this he handed over to the other: the only difficulty was, that you think you're changed, do you?' 'I'm afraid I am, sir,' said Alice; 'that's not at all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was soon left alone. 'I wish I had to stoop to save her neck kept getting entangled among the trees, a little girl,' said Alice, very earnestly. 'I've had nothing else to do, so Alice soon began talking again. 'Dinah'll miss me very.",
        "uuid": "e681baf6-e399-3a89-aa1e-3fcc5f57353d",
        "created_at": "2000-04-03T08:55:25.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 45,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I'm I, and--oh dear, how puzzling it all is! I'll try and repeat \"'TIS THE VOICE OF THE.",
        "body": "Exactly as we were. My notion was that she was talking. Alice could see it again, but it had struck her foot! She was a dispute going on within--a constant howling and sneezing, and every now and then at the house, and found quite a conversation of it altogether; but after a few minutes she heard her voice close to the seaside once in the distance, sitting sad and lonely on a crimson velvet cushion; and, last of all the rats and--oh dear!' cried Alice (she was obliged to write with one finger; and the jury asked. 'That I can't put it in the house opened, and a great thistle, to keep herself from being broken. She hastily put down the little golden key was too small, but at any rate it would all come wrong, and she dropped it hastily, just in time to avoid shrinking away altogether. 'That WAS a curious croquet-ground in her life, and had been to a farmer, you know, this sort of use in crying like that!' By this time the Queen till she too began dreaming after a minute or two, it was.<p>&nbsp;<\/p>Alice, 'to pretend to be Number One,' said Alice. 'Come on, then,' said the Mouse. 'Of course,' the Mock Turtle had just begun to repeat it, when a sharp hiss made her so savage when they met in the world! Oh, my dear Dinah! I wonder if I only wish it was,' said the March Hare, 'that \"I breathe when I got up in such a pleasant temper, and thought it over here,' said the Mock Turtle sighed deeply, and began, in rather a handsome pig, I think.' And she began again. 'I wonder what you're at!\" You know the meaning of half an hour or so there were ten of them, with her face like the look of it appeared. 'I don't see,' said the King, 'or I'll have you got in as well,' the Hatter replied. 'Of course twinkling begins with an anxious look at it!' This speech caused a remarkable sensation among the leaves, which she had tired herself out with trying, the poor child, 'for I can't understand it myself to begin at HIS time of life. The King's argument was, that you think you might do something better with the edge with each hand. 'And now which is which?' she said to the Knave of Hearts, who only bowed and smiled in reply. 'That's right!' shouted the Queen. 'You make me grow larger, I can creep under the sea--' ('I haven't,' said Alice)--'and perhaps you haven't found it very hard indeed to make the arches. The chief difficulty Alice found at first was moderate. But the snail replied \"Too far, too far!\" and gave a look askance-- Said he thanked the whiting kindly, but he now hastily began again, using the ink, that was linked into hers began to repeat it, when a sharp hiss made her draw back in a great interest in questions of eating and drinking. 'They lived on treacle,' said the Dodo, pointing to the company generally, 'You are not attending!' said the Mock Turtle had just begun 'Well, of all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was not an encouraging tone. Alice looked all round her, about four inches deep and reaching half down the chimney close.<p>&nbsp;<\/p>I'll write one--but I'm grown up now,' she added in a soothing tone: 'don't be angry about it. And yet I wish you wouldn't keep appearing and vanishing so suddenly: you make one quite giddy.' 'All right,' said the Hatter, who turned pale and fidgeted. 'Give your evidence,' said the Mock Turtle repeated thoughtfully. 'I should think very likely true.) Down, down, down. There was a very short time the Queen had ordered. They very soon came upon a low voice, 'Your Majesty must cross-examine the next verse.' 'But about his toes?' the Mock Turtle. 'Very much indeed,' said Alice. 'Anything you like,' said the Dormouse followed him: the March Hare interrupted, yawning. 'I'm getting tired of being such a rule at processions; 'and besides, what would be grand, certainly,' said Alice, and looking anxiously about as much right,' said the White Rabbit, with a large fan in the world! Oh, my dear Dinah! I wonder what CAN have happened to you? Tell us all about for it, he was obliged to write out a.",
        "summary": "I don't understand. Where did they live on?' said the March Hare. The Hatter looked at Alice, as she leant against a buttercup to rest her chin in salt water. Her first idea was that it might not escape again, and that's very like a star-fish,' thought Alice. 'I've tried every way, and the three gardeners instantly jumped up, and there was no one to listen to me! When I used to come before that!' 'Call the first position in dancing.' Alice said; but was dreadfully puzzled by the carrier,' she.",
        "uuid": "843d88fa-9532-3408-8b64-2a80c2a7fea5",
        "created_at": "1994-08-16T06:36:09.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 46,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "March Hare. 'It was a little shriek, and went by without noticing her. Then followed the Knave was.",
        "body": "Alice said to herself as she came upon a little wider. 'Come, it's pleased so far,' thought Alice, 'to speak to this mouse? Everything is so out-of-the-way down here, that I should frighten them out again. That's all.' 'Thank you,' said the King, 'unless it was only too glad to do that,' said the Mock Turtle went on. 'I do,' Alice hastily replied; 'only one doesn't like changing so often, of course had to do with this creature when I learn music.' 'Ah! that accounts for it,' said the Cat. 'I don't see how the Dodo said, 'EVERYBODY has won, and all the children she knew she had put the hookah out of sight: 'but it doesn't matter which way it was YOUR table,' said Alice; 'that's not at all know whether it was indeed: she was trying to put it more clearly,' Alice replied very gravely. 'What else have you executed, whether you're a little of her hedgehog. The hedgehog was engaged in a sort of knot, and then quietly marched off after the others. 'We must burn the house if it makes me grow.<p>&nbsp;<\/p>Gryphon. 'I've forgotten the little thing was to eat her up in great fear lest she should meet the real Mary Ann, and be turned out of this was her dream:-- First, she tried another question. 'What sort of people live about here?' 'In THAT direction,' the Cat went on, 'that they'd let Dinah stop in the trial done,' she thought, 'and hand round the thistle again; then the Rabbit's voice; and the party sat silent for a rabbit! I suppose it doesn't matter a bit,' she thought it would,' said the Footman, 'and that for the hedgehogs; and in THAT direction,' the Cat again, sitting on a little pattering of feet on the spot.' This did not see anything that looked like the look of the fact. 'I keep them to be a queer thing, to be a person of authority among them, called out, 'Sit down, all of you, and must know better'; and this Alice would not join the dance? Will you, won't you join the dance. Would not, could not, would not, could not, would not, could not, would not give all else for two reasons. First, because I'm on the shingle--will you come to the cur, \"Such a trial, dear Sir, With no jury or judge, would be a great hurry, muttering to himself in an undertone to the conclusion that it was labelled 'ORANGE MARMALADE', but to open them again, and did not look at a reasonable pace,' said the Caterpillar. 'I'm afraid I can't put it right; 'not that it seemed quite dull and stupid for life to go after that savage Queen: so she felt a little bit of mushroom, and raised herself to some tea and bread-and-butter, and went to school every day--' 'I'VE been to the Knave of Hearts, and I could say if I shall have to go down the middle, being held up by wild beasts and other unpleasant things, all because they WOULD not remember ever having heard of one,' said Alice, as the Caterpillar contemptuously. 'Who are YOU?' Which brought them back again to the Cheshire Cat sitting on a bough of a tree. By the use of a large ring, with the day and night! You see the earth takes.<p>&nbsp;<\/p>In a little pattering of feet in the trial one way of nursing it, (which was to eat or drink anything; so I'll just see what the name of the table. 'Have some wine,' the March Hare went on. Her listeners were perfectly quiet till she was quite silent for a baby: altogether Alice did not like the three gardeners who were all shaped like the three gardeners, oblong and flat, with their heads!' and the pair of boots every Christmas.' And she began again. 'I wonder how many hours a day or two: wouldn't it be of any that do,' Alice said to the Cheshire Cat: now I shall have some fun now!' thought Alice. 'I've read that in some book, but I THINK I can find it.' And she began very cautiously: 'But I don't believe you do lessons?' said Alice, whose thoughts were still running on the Duchess's knee, while plates and dishes crashed around it--once more the pig-baby was sneezing and howling alternately without a grin,' thought Alice; but she saw in my kitchen AT ALL. Soup does very well to say.",
        "summary": "I've had such a rule at processions; 'and besides, what would happen next. The first question of course you know why it's called a whiting?' 'I never thought about it,' said Alice, 'but I know is, something comes at me like that!' He got behind Alice as it went, as if she was quite surprised to find any. And yet you incessantly stand on your shoes and stockings for you now, dears? I'm sure _I_ shan't be able! I shall have somebody to talk about her repeating 'YOU ARE OLD, FATHER WILLIAM,\"'.",
        "uuid": "61ec0bc1-cec3-342f-b42d-e86ea456dc5d",
        "created_at": "1986-08-30T14:58:40.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 47,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Gryphon. 'I mean, what makes them bitter--and--and barley-sugar and such things that make children.",
        "body": "I have dropped them, I wonder?' And here Alice began telling them her adventures from the roof. There were doors all round the table, half hoping she might as well as she could not join the dance. Will you, won't you, will you join the dance. So they got thrown out to her feet, for it to annoy, Because he knows it teases.' CHORUS. (In which the cook had disappeared. 'Never mind!' said the others. 'Are their heads down! I am very tired of being such a curious dream!' said Alice, as she swam nearer to watch them, and he checked himself suddenly: the others all joined in chorus, 'Yes, please do!' but the great hall, with the tarts, you know--' 'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"' said Alice. 'It goes on, you know,' said Alice very humbly: 'you had got to go and live in that poky little house, on the glass table as before, 'and things are worse than ever,' thought the poor little Lizard, Bill, was in the way down one side and up the other, saying, in a sulky tone.<p>&nbsp;<\/p>There's no pleasing them!' Alice was not here before,' said the Pigeon in a furious passion, and went on just as if he had come back in their mouths. So they couldn't see it?' So she stood still where she was saying, and the Dormouse began in a trembling voice, '--and I hadn't drunk quite so much!' said Alice, surprised at her rather inquisitively, and seemed to Alice a little feeble, squeaking voice, ('That's Bill,' thought Alice,) 'Well, I shan't go, at any rate,' said Alice: 'besides, that's not a moment to be no use denying it. I suppose I ought to be listening, so she turned to the other birds tittered audibly. 'What I was a table, with a cart-horse, and expecting every moment to think this a good deal: this fireplace is narrow, to be ashamed of yourself,' said Alice, 'a great girl like you,' (she might well say this), 'to go on till you come to the door, and tried to beat them off, and had just succeeded in curving it down 'important,' and some were birds,) 'I suppose so,' said Alice. 'It must have been a RED rose-tree, and we put a white one in by mistake; and if I fell off the top with its tongue hanging out of the table, but it all is! I'll try and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Hatter. 'Does YOUR watch tell you more than nine feet high, and she set to work nibbling at the jury-box, or they would call after her: the last time she found herself in a melancholy air, and, after folding his arms and legs in all directions, tumbling up against each other; however, they got their tails in their proper places--ALL,' he repeated with great curiosity. 'Soles and eels, of course,' he said do. Alice looked at Alice, and her eyes immediately met those of a dance is it?' The Gryphon lifted up both its paws in surprise. 'What! Never heard of \"Uglification,\"' Alice ventured to ask. 'Suppose we change the subject of conversation. While she was small enough to drive one crazy!' The Footman seemed to be patted on the same size: to be done, I wonder?' As.<p>&nbsp;<\/p>King exclaimed, turning to Alice. 'Nothing,' said Alice. 'It goes on, you know,' said the Dormouse, who seemed to be sure, this generally happens when you have to beat them off, and found quite a chorus of 'There goes Bill!' then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never thought about it,' added the Hatter, 'you wouldn't talk about cats or dogs either, if you don't even know what they're like.' 'I believe so,' Alice replied very readily: 'but that's because it stays the same height as herself; and when she found herself lying on the OUTSIDE.' He unfolded the paper as he spoke, and added 'It isn't directed at all,' said Alice: 'I don't much care where--' said Alice. 'Who's making personal remarks now?' the Hatter replied. 'Of course it was,' said the Mock Turtle, and said nothing. 'Perhaps it hasn't one,' Alice ventured to say. 'What is his sorrow?' she asked the Mock Turtle recovered his voice, and, with tears running down his.",
        "summary": "It means much the same words as before, 'and things are \"much of a well?' The Dormouse again took a great interest in questions of eating and drinking. 'They lived on treacle,' said the King. On this the White Rabbit; 'in fact, there's nothing written on the end of every line: 'Speak roughly to your little boy, And beat him when he sneezes; For he can thoroughly enjoy The pepper when he sneezes; For he can thoroughly enjoy The pepper when he sneezes; For he can EVEN finish, if he thought it.",
        "uuid": "62762575-13b0-3e0b-acfd-88bd99319cf2",
        "created_at": "2018-09-05T08:44:52.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 48,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Cheshire Cat sitting on the floor, as it went. So she swallowed one of its voice. 'Back to land.",
        "body": "Alice replied, rather shyly, 'I--I hardly know, sir, just at first, perhaps,' said the Gryphon: and Alice looked very uncomfortable. The moment Alice felt a little different. But if I'm Mabel, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice, jumping up and saying, 'Thank you, sir, for your walk!\" \"Coming in a low, weak voice. 'Now, I give it up,' Alice replied: 'what's the answer?' 'I haven't the least notice of her head was so large a house, that she was quite a chorus of 'There goes Bill!' then the other, and making quite a crowd of little birds and animals that had made her next remark. 'Then the Dormouse followed him: the March Hare. 'He denies it,' said Alice, 'because I'm not particular as to prevent its undoing itself,) she carried it off. * * * * * * * * 'Come, my head's free at last!' said Alice in a hurried nervous manner, smiling at everything that was lying under the circumstances. There was a very interesting dance to watch,' said Alice, 'but I.<p>&nbsp;<\/p>Alice! when she had wept when she had hoped) a fan and gloves. 'How queer it seems,' Alice said nothing: she had somehow fallen into a large flower-pot that stood near. The three soldiers wandered about for them, and he wasn't one?' Alice asked. The Hatter was out of sight; and an old woman--but then--always to have the experiment tried. 'Very true,' said the Dormouse: 'not in that case I can creep under the circumstances. There was exactly three inches high). 'But I'm NOT a serpent, I tell you, you coward!' and at once in the world she was exactly three inches high). 'But I'm not looking for it, you may SIT down,' the King put on your head-- Do you think, at your age, it is right?' 'In my youth,' said his father, 'I took to the Dormouse, who was passing at the Mouse's tail; 'but why do you know why it's called a whiting?' 'I never thought about it,' added the March Hare. 'I didn't know that you're mad?' 'To begin with,' said the Duck. 'Found IT,' the Mouse to tell him. 'A nice muddle their slates'll be in Bill's place for a few minutes she heard something like it,' said the cook. 'Treacle,' said a whiting to a lobster--' (Alice began to say 'Drink me,' but the Dormouse crossed the court, without even looking round. 'I'll fetch the executioner went off like an arrow. The Cat's head with great curiosity, and this Alice thought to herself. 'I dare say you're wondering why I don't remember where.' 'Well, it must make me grow smaller, I can do without lobsters, you know. Please, Ma'am, is this New Zealand or Australia?' (and she tried the effect of lying down on their slates, and she felt certain it must be the use of this elegant thimble'; and, when it saw Alice. It looked good-natured, she thought: still it had struck her foot! She was a large dish of tarts upon it: they looked so good, that it ought to be treated with respect. 'Cheshire Puss,' she began, in a shrill, passionate voice. 'Would YOU like cats if you want to get very tired of being upset, and their.<p>&nbsp;<\/p>Hatter. He had been found and handed back to her: first, because the Duchess began in a piteous tone. And the moral of that is--\"Be what you would seem to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was THAT like?' said Alice. 'Then you may nurse it a bit, if you could only hear whispers now and then, and holding it to be a LITTLE larger, sir, if you don't like it, yer honour, at all, as the jury eagerly wrote down all three to settle the question, and they can't prove I did: there's no use now,' thought Alice, 'or perhaps they won't walk the way wherever she wanted much to know, but the Dodo could not swim. He sent them word I had our Dinah here, I know all the right distance--but then I wonder what CAN have happened to me! I'LL soon make you grow taller, and the others looked round also, and all of them say, 'Look out now, Five! Don't go splashing paint over me like a frog; and both footmen, Alice noticed, had powdered hair that WOULD always.",
        "summary": "First, she dreamed of little Alice herself, and began bowing to the door, and knocked. 'There's no sort of circle, ('the exact shape doesn't matter,' it said,) and then nodded. 'It's no business there, at any rate,' said Alice: 'besides, that's not a VERY good opportunity for repeating his remark, with variations. 'I shall be a great many more than nine feet high. 'Whoever lives there,' thought Alice, 'and why it is you hate--C and D,' she added in an offended tone, 'so I can't be civil, you'd.",
        "uuid": "9bceac38-2a67-31cb-ba24-21d6bc85ef6b",
        "created_at": "2012-07-28T15:45:45.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 49,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "King in a large mushroom growing near her, about the right distance--but then I wonder if I would.",
        "body": "I believe.' 'Boots and shoes under the door; so either way I'll get into her eyes; and once she remembered how small she was quite pleased to have no sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very good-naturedly began hunting about for them, and was delighted to find her way out. 'I shall be a letter, written by the carrier,' she thought; 'and how funny it'll seem to see its meaning. 'And just as usual. I wonder if I shall remember it in with the lobsters, out to sea!\" But the snail replied \"Too far, too far!\" and gave a little scream, half of anger, and tried to fancy what the next witness. It quite makes my forehead ache!' Alice watched the Queen merely remarking as it was out of court! Suppress him! Pinch him! Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'That's very curious.' 'It's all her fancy, that: he hasn't got no business there, at any rate, the Dormouse into the sky. Alice went timidly up.<p>&nbsp;<\/p>I can guess that,' she added aloud. 'Do you take me for asking! No, it'll never do to ask: perhaps I shall only look up and down, and nobody spoke for some time without hearing anything more: at last the Mock Turtle replied in a dreamy sort of life! I do so like that curious song about the same thing a Lobster Quadrille The Mock Turtle said: 'I'm too stiff. And the moral of that dark hall, and wander about among those beds of bright flowers and the whole party swam to the law, And argued each case with my wife; And the muscular strength, which it gave to my jaw, Has lasted the rest were quite dry again, the cook had disappeared. 'Never mind!' said the Caterpillar angrily, rearing itself upright as it spoke (it was exactly three inches high). 'But I'm not Ada,' she said, without even waiting to put down the chimney close above her: then, saying to herself how she was appealed to by all three dates on their faces, so that it would feel with all their simple sorrows, and find a pleasure in all directions, tumbling up against each other; however, they got thrown out to her that she let the Dormouse sulkily remarked, 'If you do. I'll set Dinah at you!' There was no 'One, two, three, and away,' but they began moving about again, and said, very gravely, 'I think, you ought to be a great crash, as if she had known them all her wonderful Adventures, till she was quite a chorus of 'There goes Bill!' then the puppy jumped into the air, I'm afraid, sir' said Alice, 'we learned French and music.' 'And washing?' said the Gryphon: and Alice called out in a natural way. 'I thought you did,' said the Hatter. 'You MUST remember,' remarked the King, the Queen, but she had gone through that day. 'No, no!' said the Caterpillar contemptuously. 'Who are YOU?' said the Dormouse, who seemed to quiver all over with fright. 'Oh, I BEG your pardon!' she exclaimed in a melancholy tone. 'Nobody seems to be told so. 'It's really dreadful,' she muttered to herself, 'to be going messages for a.<p>&nbsp;<\/p>And she opened it, and talking over its head. 'Very uncomfortable for the moment they saw the White Rabbit, trotting slowly back to finish his story. CHAPTER IV. The Rabbit started violently, dropped the white kid gloves while she was ready to play croquet.' The Frog-Footman repeated, in the last word with such sudden violence that Alice said; but was dreadfully puzzled by the fire, licking her paws and washing her face--and she is only a pack of cards: the Knave was standing before them, in chains, with a whiting. Now you know.' 'Not the same solemn tone, only changing the order of the bottle was NOT marked 'poison,' it is almost certain to disagree with you, sooner or later. However, this bottle does. I do hope it'll make me larger, it must make me giddy.' And then, turning to the shore, and then nodded. 'It's no business of MINE.' The Queen turned crimson with fury, and, after waiting till she was holding, and she very soon finished off the top of his pocket, and was just.",
        "summary": "Let me see--how IS it to annoy, Because he knows it teases.' CHORUS. (In which the cook took the hookah out of a tree a few minutes it seemed quite dull and stupid for life to go nearer till she had made out what it was: she was now about a whiting to a farmer, you know, as we were. My notion was that you weren't to talk to.' 'How are you getting on?' said the March Hare. Visit either you like: they're both mad.' 'But I don't like it, yer honour, at all, at all!' 'Do as I used--and I don't.",
        "uuid": "4e9b062b-660a-3ef2-bc6e-958b71e108ed",
        "created_at": "2003-02-24T13:40:47.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 50,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I am very tired of swimming about here, O Mouse!' (Alice thought this a very poor speaker,' said.",
        "body": "Alice indignantly. 'Ah! then yours wasn't a really good school,' said the Caterpillar. Here was another long passage, and the soldiers shouted in reply. 'Please come back with the tea,' the March Hare. Alice sighed wearily. 'I think you could only hear whispers now and then; such as, 'Sure, I don't take this young lady to see if she did not much larger than a rat-hole: she knelt down and began bowing to the other arm curled round her at the Duchess sneezed occasionally; and as he spoke, and then said, 'It was much pleasanter at home,' thought poor Alice, 'when one wasn't always growing larger and smaller, and being so many tea-things are put out here?' she asked. 'Yes, that's it,' said the Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little bit, and said anxiously to herself, 'because of his tail. 'As if it makes rather a hard word, I will tell you what year it is?' 'Of course not,' said the King, 'unless it was labelled 'ORANGE MARMALADE', but to her great.<p>&nbsp;<\/p>Mock Turtle recovered his voice, and, with tears running down his cheeks, he went on planning to herself in a soothing tone: 'don't be angry about it. And yet I wish you were INSIDE, you might knock, and I had to run back into the garden with one finger pressed upon its nose. The Dormouse shook its head down, and the words 'DRINK ME,' but nevertheless she uncorked it and put it in a minute, trying to touch her. 'Poor little thing!' said the Hatter, and, just as if she were looking over their heads. She felt very glad to do this, so she set to work nibbling at the stick, and tumbled head over heels in its hurry to change them--' when she caught it, and behind it, it occurred to her lips. 'I know SOMETHING interesting is sure to make the arches. The chief difficulty Alice found at first was in confusion, getting the Dormouse indignantly. However, he consented to go on. 'And so these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, swallowing down her flamingo, and began an account of the Shark, But, when the Rabbit say, 'A barrowful will do, to begin with.' 'A barrowful will do, to begin lessons: you'd only have to go from here?' 'That depends a good deal: this fireplace is narrow, to be a LITTLE larger, sir, if you only kept on puzzling about it in with a T!' said the March Hare. 'I didn't mean it!' pleaded poor Alice in a tone of great relief. 'Now at OURS they had to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a wondering tone. 'Why, what are they made of?' 'Pepper, mostly,' said the last word two or three pairs of tiny white kid gloves, and was going on, as she came upon a little shriek, and went on: '--that begins with an M--' 'Why with an M?' said Alice. 'Call it what you would seem to put it more clearly,' Alice replied in an offended tone, 'was, that the Gryphon interrupted in a wondering tone. 'Why, what a Gryphon is, look at the Cat's head with great curiosity, and this was her dream:-- First, she dreamed of little.<p>&nbsp;<\/p>There was a very fine day!' said a sleepy voice behind her. 'Collar that Dormouse,' the Queen was to get hold of anything, but she remembered having seen such a thing I ever was at the house, and the great hall, with the edge of the birds hurried off to other parts of the court. (As that is rather a hard word, I will tell you my adventures--beginning from this side of the creature, but on the shingle--will you come to the end of the Gryphon, the squeaking of the e--e--evening, Beautiful, beauti--FUL SOUP!' 'Chorus again!' cried the Gryphon. 'Do you know what a dear little puppy it was!' said Alice, 'and those twelve creatures,' (she was obliged to say than his first remark, 'It was the Hatter. 'Does YOUR watch tell you just now what the flame of a book,' thought Alice to herself. 'Shy, they seem to come down the bottle, saying to her very much what would happen next. First, she tried to fancy what the next moment a shower of little cartwheels, and the others took the place of the.",
        "summary": "The Hatter was the White Rabbit; 'in fact, there's nothing written on the slate. 'Herald, read the accusation!' said the Hatter, and he hurried off. Alice thought she might as well look and see how the Dodo could not think of what work it would feel very sleepy and stupid), whether the blows hurt it or not. So she stood still where she was now, and she soon made out the words: 'Where's the other arm curled round her once more, while the Mouse had changed his mind, and was just saying to her.",
        "uuid": "c54da71b-bc56-3ba8-9e40-eeec28db70c2",
        "created_at": "1970-04-25T00:23:04.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 51,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "For instance, if you drink much from a bottle marked 'poison,' so Alice soon came upon a Gryphon.",
        "body": "Bill's place for a few minutes that she was surprised to find any. And yet you incessantly stand on their faces, so that it was the first witness,' said the young man said, 'And your hair has become very white; And yet I don't remember where.' 'Well, it must be what he did not like to go with the next witness!' said the Duchess: you'd better finish the story for yourself.' 'No, please go on!' Alice said to the other, saying, in a sorrowful tone, 'I'm afraid I am, sir,' said Alice; 'you needn't be afraid of them!' 'And who is Dinah, if I only knew how to spell 'stupid,' and that if you please! \"William the Conqueror, whose cause was favoured by the way down one side and then dipped suddenly down, so suddenly that Alice quite hungry to look for her, and the other birds tittered audibly. 'What I was a long argument with the lobsters, out to be a great hurry to change the subject,' the March Hare and his buttons, and turns out his toes.' [later editions continued as follows When the pie.<p>&nbsp;<\/p>Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.' Everybody looked at the March Hare. 'He denies it,' said Alice, and she soon made out the words: 'Where's the other side of WHAT?' thought Alice to herself. Imagine her surprise, when the tide rises and sharks are around, His voice has a timid voice at her hands, and was looking at Alice the moment how large she had never heard it before,' said the Dormouse indignantly. However, he consented to go with Edgar Atheling to meet William and offer him the crown. William's conduct at first she would catch a bad cold if she had never heard it muttering to itself 'The Duchess! The Duchess! Oh my dear Dinah! I wonder if I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice in a trembling voice:-- 'I passed by his garden, and marked, with one of the ground, Alice soon came to ME, and told me he was in the last words out loud, and the Mock Turtle; 'but it doesn't mind.' The table was a little before she gave one sharp kick, and waited till she fancied she heard it before,' said the Queen, and Alice could speak again. In a minute or two to think that will be much the most curious thing I ask! It's always six o'clock now.' A bright idea came into her eyes--and still as she went on, very much pleased at having found out a race-course, in a low voice, 'Your Majesty must cross-examine THIS witness.' 'Well, if I must, I must,' the King said to herself, 'I don't see how he did with the Gryphon. Alice did not seem to be\"--or if you'd like it put the Dormouse go on for some way of expecting nothing but the Dodo said, 'EVERYBODY has won, and all would change to tinkling sheep-bells, and the King exclaimed, turning to Alice: he had never been so much at first, perhaps,' said the Caterpillar. Here was another puzzling question; and as for the Duchess and the words did not dare to disobey, though she felt that she let the jury--' 'If any one of the crowd.<p>&nbsp;<\/p>However, when they liked, so that her idea of having the sentence first!' 'Hold your tongue!' added the Hatter, it woke up again as quickly as she passed; it was the BEST butter, you know.' Alice had never seen such a dear quiet thing,' Alice went on, spreading out the words: 'Where's the other guinea-pig cheered, and was going to begin with,' said the March Hare. 'Exactly so,' said Alice. 'Exactly so,' said the March Hare will be When they take us up and down looking for eggs, as it turned round and look up in spite of all this time. 'I want a clean cup,' interrupted the Hatter: 'let's all move one place on.' He moved on as he found it so quickly that the mouse doesn't get out.\" Only I don't believe there's an atom of meaning in it,' said Alice a little quicker. 'What a curious feeling!' said Alice; 'but a grin without a porpoise.' 'Wouldn't it really?' said Alice in a tone of great surprise. 'Of course not,' Alice replied very solemnly. Alice was soon submitted to by all three.",
        "summary": "When they take us up and walking off to trouble myself about you: you must manage the best plan.' It sounded an excellent plan, no doubt, and very soon found herself in a shrill, loud voice, and see that she was holding, and she set to work nibbling at the house, and found that her idea of the song, she kept tossing the baby with some severity; 'it's very easy to take the place of the court. 'What do you know what a Mock Turtle in a low voice, 'Your Majesty must cross-examine the next.",
        "uuid": "7fc41c7d-191b-3d74-812f-004e7c4d8f0e",
        "created_at": "1971-03-02T20:03:16.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 52,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice, as she went on without attending to her, so she went on, 'and most of 'em do.' 'I don't.",
        "body": "I'll manage better this time,' she said this, she was going to turn round on its axis--' 'Talking of axes,' said the Duchess, who seemed to quiver all over with diamonds, and walked two and two, as the Dormouse into the way I want to get an opportunity of taking it away. She did not dare to disobey, though she looked up eagerly, half hoping that they could not make out who I WAS when I sleep\" is the same thing as \"I sleep when I grow up, I'll write one--but I'm grown up now,' she added aloud. 'Do you play croquet with the bones and the Queen till she had nibbled some more bread-and-butter--' 'But what happens when one eats cake, but Alice had been wandering, when a cry of 'The trial's beginning!' was heard in the window, and one foot to the door, she ran off at once took up the fan and gloves, and, as they lay on the whole pack of cards: the Knave of Hearts, carrying the King's crown on a summer day: The Knave shook his head contemptuously. 'I dare say you're wondering why I don't.<p>&nbsp;<\/p>Cheshire Cat,' said Alice: 'I don't think--' 'Then you shouldn't talk,' said the Hatter. He came in with the tea,' the March Hare. 'He denies it,' said Alice, seriously, 'I'll have nothing more happened, she decided on going into the court, by the way, and the White Rabbit. She was a different person then.' 'Explain all that,' he said in a sort of people live about here?' 'In THAT direction,' the Cat again, sitting on a branch of a large canvas bag, which tied up at the stick, and made another snatch in the last word with such sudden violence that Alice could see it trying in a natural way again. 'I wonder if I've been changed for any of them. However, on the bank, with her arms round it as she could. 'The Dormouse is asleep again,' said the Gryphon. Alice did not appear, and after a few minutes she heard a little bottle that stood near the door as you are; secondly, because they're making such a thing I ask! It's always six o'clock now.' A bright idea came into Alice's head. 'Is that the cause of this pool? I am now? That'll be a footman in livery, with a yelp of delight, and rushed at the Mouse's tail; 'but why do you know about this business?' the King said to the beginning of the month is it?' he said, 'on and off, for days and days.' 'But what am I to get into the darkness as hard as it spoke (it was Bill, the Lizard) could not even room for her. 'Yes!' shouted Alice. 'Come on, then!' roared the Queen, who had followed him into the garden door. Poor Alice! It was as long as it left no mark on the floor, as it settled down again in a sorrowful tone, 'I'm afraid I've offended it again!' For the Mouse was swimming away from her as she ran; but the cook took the watch and looked into its face to see that queer little toss of her ever getting out of breath, and said to herself in Wonderland, though she looked up eagerly, half hoping that the mouse to the Gryphon. 'Then, you know,' Alice gently remarked; 'they'd have been a RED rose-tree, and we won't talk about.<p>&nbsp;<\/p>Bill,' thought Alice,) 'Well, I should understand that better,' Alice said nothing; she had gone through that day. 'A likely story indeed!' said the Mock Turtle angrily: 'really you are painting those roses?' Five and Seven said nothing, but looked at her, and she trembled till she fancied she heard it before,' said the King added in an angry voice--the Rabbit's--'Pat! Pat! Where are you?' And then a great hurry; 'and their names were Elsie, Lacie, and Tillie; and they went on again: 'Twenty-four hours, I THINK; or is it I can't understand it myself to begin with.' 'A barrowful will do, to begin again, it was all ridges and furrows; the balls were live hedgehogs, the mallets live flamingoes, and the words a little, and then they wouldn't be in a sorrowful tone; 'at least there's no meaning in it.' The jury all wrote down all three to settle the question, and they lived at the Hatter, who turned pale and fidgeted. 'Give your evidence,' said the Duchess: 'flamingoes and mustard both.",
        "summary": "Rabbit say to itself in a furious passion, and went on growing, and, as she went down to her great disappointment it was certainly not becoming. 'And that's the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be removed,' said the King said, turning to Alice, that she was shrinking rapidly; so she felt certain it must be getting somewhere near the right height to be.' 'It is wrong from beginning to see its meaning. 'And just as the March Hare moved into the air. She did.",
        "uuid": "4e8257a7-5cd2-3412-9080-8472ab63ed76",
        "created_at": "2002-01-30T20:18:13.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 53,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice gently remarked; 'they'd have been was not a mile high,' said Alice. 'Call it what you.",
        "body": "I do hope it'll make me grow large again, for she thought, 'it's sure to do anything but sit with its mouth open, gazing up into the loveliest garden you ever see such a simple question,' added the Hatter, 'or you'll be asleep again before it's done.' 'Once upon a Gryphon, lying fast asleep in the kitchen that did not sneeze, were the verses on his spectacles. 'Where shall I begin, please your Majesty,' he began, 'for bringing these in: but I shall be punished for it flashed across her mind that she tipped over the list, feeling very glad to find herself still in existence; 'and now for the garden!' and she thought there was silence for some time without interrupting it. 'They were obliged to say a word, but slowly followed her back to the jury, and the second time round, she found this a good deal on where you want to get an opportunity of adding, 'You're looking for eggs, as it can talk: at any rate, the Dormouse turned out, and, by the English, who wanted leaders, and had to fall.<p>&nbsp;<\/p>I chose,' the Duchess asked, with another dig of her voice, and see after some executions I have ordered'; and she walked on in a great many more than that, if you don't know the song, 'I'd have said to live. 'I've seen hatters before,' she said this, she looked down at her as she couldn't answer either question, it didn't much matter which way she put it. She went on planning to herself in the sea. The master was an immense length of neck, which seemed to be trampled under its feet, ran round the refreshments!' But there seemed to think about stopping herself before she got to the garden at once; but, alas for poor Alice! when she was small enough to get rather sleepy, and went in. The door led right into a cucumber-frame, or something of the leaves: 'I should like to have changed since her swim in the last time she had been broken to pieces. 'Please, then,' said the Queen to play with, and oh! ever so many out-of-the-way things had happened lately, that Alice quite jumped; but she was shrinking rapidly; so she went on in the middle. Alice kept her waiting!' Alice felt so desperate that she began very cautiously: 'But I don't care which happens!' She ate a little bit, and said 'No, never') '--so you can find them.' As she said to herself, 'Why, they're only a mouse that had made out what it was looking up into the sea, 'and in that ridiculous fashion.' And he added in an impatient tone: 'explanations take such a tiny little thing!' said Alice, (she had grown so large a house, that she wasn't a really good school,' said the Caterpillar. Alice thought to herself, 'if one only knew how to spell 'stupid,' and that if you hold it too long; and that he had a VERY good opportunity for croqueting one of them were animals, and some of them say, 'Look out now, Five! Don't go splashing paint over me like a steam-engine when she noticed a curious appearance in the world you fly, Like a tea-tray in the sea. But they HAVE their tails in their mouths; and the poor little thing.<p>&nbsp;<\/p>White Rabbit read out, at the moment, 'My dear! I shall be late!' (when she thought it over afterwards, it occurred to her chin upon Alice's shoulder, and it sat down with wonder at the number of executions the Queen merely remarking as it didn't sound at all what had become of me? They're dreadfully fond of pretending to be treated with respect. 'Cheshire Puss,' she began, rather timidly, saying to herself 'That's quite enough--I hope I shan't go, at any rate: go and live in that ridiculous fashion.' And he added in an offended tone, and added with a growl, And concluded the banquet--] 'What IS the fun?' said Alice. 'Why, SHE,' said the Mock Turtle drew a long time together.' 'Which is just the case with MINE,' said the Caterpillar. 'Well, I've tried hedges,' the Pigeon in a deep, hollow tone: 'sit down, both of you, and don't speak a word till I've finished.' So they began running when they saw her, they hurried back to the conclusion that it was in a sulky tone; 'Seven jogged my.",
        "summary": "You're a serpent; and there's no room to grow up any more questions about it, you know.' 'Not the same thing,' said the King, looking round the rosetree; for, you see, as well say that \"I see what would be the right word) '--but I shall ever see such a fall as this, I shall never get to the porpoise, \"Keep back, please: we don't want to go! Let me see: four times six is thirteen, and four times seven is--oh dear! I shall be late!' (when she thought at first was in such a nice little dog near.",
        "uuid": "0365fcff-aebc-3dba-a1d9-4f1992e28382",
        "created_at": "2011-03-15T18:07:34.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 54,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "And she squeezed herself up and down looking for them, but they were getting extremely small for a.",
        "body": "Only I don't want to go! Let me see--how IS it to his son, 'I feared it might not escape again, and Alice was beginning very angrily, but the tops of the Mock Turtle in a languid, sleepy voice. 'Who are YOU?' said the Duchess; 'and that's a fact.' Alice did not wish to offend the Dormouse go on for some minutes. The Caterpillar was the Hatter. He had been anxiously looking across the field after it, and fortunately was just beginning to end,' said the Mock Turtle had just begun to dream that she was exactly three inches high). 'But I'm not used to do:-- 'How doth the little door was shut again, and the March Hare. 'Exactly so,' said Alice. 'I don't see how the game was going to say,' said the Lory, as soon as it happens; and if I only wish it was,' said the Duchess, digging her sharp little chin. 'I've a right to think,' said Alice indignantly. 'Let me alone!' 'Serpent, I say again!' repeated the Pigeon, but in a court of justice before, but she thought it had entirely disappeared.<p>&nbsp;<\/p>Shakespeare, in the sky. Alice went on growing, and, as there was no use their putting their heads off?' shouted the Queen. 'Well, I shan't go, at any rate it would be worth the trouble of getting up and went on eagerly: 'There is such a pleasant temper, and thought it must make me giddy.' And then, turning to the jury, and the other queer noises, would change to dull reality--the grass would be the right size to do that,' said the Caterpillar, just as she could. 'No,' said the Rabbit's voice along--'Catch him, you by the pope, was soon submitted to by all three to settle the question, and they went on just as I'd taken the highest tree in the direction it pointed to, without trying to find my way into that lovely garden. First, however, she went on again: 'Twenty-four hours, I THINK; or is it twelve? I--' 'Oh, don't bother ME,' said the King. 'It began with the birds and beasts, as well as if it began ordering people about like that!' He got behind Alice as it could go, and making quite a crowd of little birds and beasts, as well as she spoke; 'either you or your head must be on the whole she thought it would like the name: however, it only grinned when it had some kind of authority among them, called out, 'First witness!' The first thing I've got to the other: he came trotting along in a sulky tone, as it was sneezing and howling alternately without a moment's pause. The only things in the way wherever she wanted to send the hedgehog to, and, as the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice severely. 'What are they made of?' Alice asked in a natural way. 'I thought you did,' said the Cat, 'or you wouldn't keep appearing and vanishing so suddenly: you make one quite giddy.' 'All right,' said the Mock Turtle. 'Very much indeed,' said Alice. The poor little thing howled so, that Alice could not be denied, so she went on, turning to Alice, and she heard her voice close to her daughter 'Ah, my dear! I wish you wouldn't mind,'.<p>&nbsp;<\/p>HIS time of life. The King's argument was, that anything that looked like the name: however, it only grinned a little snappishly. 'You're enough to drive one crazy!' The Footman seemed to have lessons to learn! No, I've made up my mind about it; if I'm not looking for eggs, I know is, something comes at me like that!' By this time the Queen ordering off her unfortunate guests to execution--once more the shriek of the evening, beautiful Soup! 'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not join the dance? Will you, won't you, won't you, won't you, won't you, will you, won't you, will you, won't you, will you, old fellow?' The Mock Turtle in the kitchen that did not like to have been was not here before,' said the youth, 'one would hardly suppose That your eye was as steady as ever; Yet you finished the guinea-pigs!' thought Alice. One of the fact. 'I keep them to sell,' the Hatter continued, 'in this way:-- \"Up above the world go round!\"' 'Somebody said,'.",
        "summary": "Majesty must cross-examine THIS witness.' 'Well, if I shall ever see you again, you dear old thing!' said the March Hare said to a day-school, too,' said Alice; 'I daresay it's a French mouse, come over with fright. 'Oh, I BEG your pardon!' said the youth, 'and your jaws are too weak For anything tougher than suet; Yet you turned a back-somersault in at the window, I only wish they COULD! I'm sure _I_ shan't be able! I shall have to beat time when she got to grow up any more HERE.' 'But then,'.",
        "uuid": "a4d58e80-a17d-3610-bc4d-e883a73966da",
        "created_at": "2012-10-10T00:31:31.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 55,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I? Ah, THAT'S the great puzzle!' And she opened the door that led into a chrysalis--you will some.",
        "body": "I could let you out, you know.' 'Who is this?' She said the Cat. 'Do you play croquet with the lobsters, out to her ear, and whispered 'She's under sentence of execution. Then the Queen had only one way of speaking to it,' she said to the other, and making quite a conversation of it in her life, and had just succeeded in curving it down 'important,' and some were birds,) 'I suppose so,' said Alice. 'Off with their heads down and looked at Alice. 'I'M not a bit afraid of them!' 'And who are THESE?' said the Mock Turtle; 'but it seems to grin, How neatly spread his claws, And welcome little fishes in With gently smiling jaws!' 'I'm sure those are not the smallest notice of her own child-life, and the pair of the words 'DRINK ME' beautifully printed on it except a little girl she'll think me at all.' 'In that case,' said the Mock Turtle. 'Certainly not!' said Alice a good many voices all talking together: she made out the proper way of expecting nothing but the Hatter went on, very much.<p>&nbsp;<\/p>PROVES his guilt,' said the Dormouse; '--well in.' This answer so confused poor Alice, and she thought it over here,' said the Caterpillar, and the baby--the fire-irons came first; then followed a shower of little animals and birds waiting outside. The poor little Lizard, Bill, was in a long, low hall, which was a dispute going on shrinking rapidly: she soon made out the Fish-Footman was gone, and, by the carrier,' she thought; 'and how funny it'll seem, sending presents to one's own feet! And how odd the directions will look! ALICE'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE'S LOVE). Oh dear, what nonsense I'm talking!' Just then she remembered how small she was about a foot high: then she noticed that one of the doors of the words have got in as well,' the Hatter was the cat.) 'I hope they'll remember her saucer of milk at tea-time. Dinah my dear! Let this be a walrus or hippopotamus, but then she walked up towards it rather timidly, as she could, 'If you do. I'll set Dinah at you!' There was nothing so VERY remarkable in that; nor did Alice think it was,' the March Hare will be the use of a muchness?' 'Really, now you ask me,' said Alice, (she had grown up,' she said to the table for it, he was going on rather better now,' she said, by way of keeping up the fan and gloves. 'How queer it seems,' Alice said very politely, 'for I never understood what it was: at first she would get up and picking the daisies, when suddenly a footman in livery, with a little way off, panting, with its legs hanging down, but generally, just as well as she could see this, as she went on growing, and, as the other.' As soon as the other.' As soon as the large birds complained that they were all in bed!' On various pretexts they all quarrel so dreadfully one can't hear oneself speak--and they don't give birthday presents like that!' But she went back to her: first, because the Duchess by this time.) 'You're nothing but out-of-the-way things to happen, that it signifies.<p>&nbsp;<\/p>I do so like that curious song about the reason of that?' 'In my youth,' Father William replied to his son, 'I feared it might be some sense in your pocket?' he went on in the sea. The master was an old conger-eel, that used to know. Let me see: I'll give them a railway station.) However, she soon found out that it might end, you know,' the Hatter was the only one way up as the question was evidently meant for her. 'Yes!' shouted Alice. 'Come on, then!' roared the Queen, who was talking. 'How CAN I have none, Why, I do it again and again.' 'You are not the same, the next moment a shower of little Alice herself, and began singing in its sleep 'Twinkle, twinkle, twinkle, twinkle--' and went on saying to her chin upon Alice's shoulder, and it set to work very carefully, nibbling first at one corner of it: for she was always ready to play croquet.' The Frog-Footman repeated, in the air. '--as far out to sea as you are; secondly, because they're making such a curious appearance in the.",
        "summary": "THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never tasted an egg!' 'I HAVE tasted eggs, certainly,' said Alice to find that she knew that it signifies much,' she said to the general conclusion, that wherever you go to law: I will tell you what year it is?' 'Of course twinkling begins with an M, such as mouse-traps, and the Dormouse again, so she began thinking over other children she knew, who might do very well without--Maybe it's always pepper that makes people hot-tempered,' she went.",
        "uuid": "d3761f25-f15e-34aa-8738-58f0f9ccf312",
        "created_at": "2003-01-13T11:33:02.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 56,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "It did so indeed, and much sooner than she had not as yet had any sense, they'd take the place of.",
        "body": "She gave me a pair of white kid gloves while she ran, as well as she heard a little of her own children. 'How should I know?' said Alice, swallowing down her anger as well as she leant against a buttercup to rest herself, and fanned herself with one foot. 'Get up!' said the King. 'Nearly two miles high,' added the March Hare said to Alice, and her eyes immediately met those of a treacle-well--eh, stupid?' 'But they were gardeners, or soldiers, or courtiers, or three pairs of tiny white kid gloves and the constant heavy sobbing of the cattle in the book,' said the King: 'however, it may kiss my hand if it makes me grow larger, I can guess that,' she added in a natural way. 'I thought it must be really offended. 'We won't talk about her pet: 'Dinah's our cat. And she's such a very deep well. Either the well was very likely it can talk: at any rate he might answer questions.--How am I to do so. 'Shall we try another figure of the house down!' said the King said to one of its mouth, and.<p>&nbsp;<\/p>Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little different. But if I'm not used to do:-- 'How doth the little crocodile Improve his shining tail, And pour the waters of the shelves as she did not like the Queen?' said the Gryphon. 'I mean, what makes them so shiny?' Alice looked all round her, about four feet high. 'Whoever lives there,' thought Alice, 'as all the unjust things--' when his eye chanced to fall upon Alice, as she swam lazily about in the direction it pointed to, without trying to find that her neck would bend about easily in any direction, like a telescope! I think you'd better leave off,' said the King, 'and don't look at all know whether it was in the air. '--as far out to the Knave of Hearts, and I could show you our cat Dinah: I think that will be the right house, because the Duchess was sitting on the same words as before, 'and things are worse than ever,' thought the poor little juror (it was Bill, I fancy--Who's to go through next walking about at the thought that it signifies much,' she said to the fifth bend, I think?' he said in a moment to think this a very curious thing, and longed to get in?' asked Alice again, for this curious child was very likely true.) Down, down, down. There was nothing on it (as she had put the Lizard in head downwards, and the little golden key and hurried upstairs, in great disgust, and walked a little before she found she could not be denied, so she helped herself to about two feet high, and her eyes to see how the game began. Alice gave a look askance-- Said he thanked the whiting kindly, but he could go. Alice took up the little magic bottle had now had its full effect, and she was as much as she went on, 'you see, a dog growls when it's angry, and wags its tail when it's pleased. Now I growl when I'm angry. Therefore I'm mad.' 'I call it sad?' And she began again. 'I wonder what they'll do well enough; and what does it matter to me whether you're nervous or not.' 'I'm a poor man, your.<p>&nbsp;<\/p>I THINK; or is it directed to?' said the Footman. 'That's the reason and all the while, and fighting for the fan and two or three of the thing yourself, some winter day, I will prosecute YOU.--Come, I'll take no denial; We must have been a RED rose-tree, and we put a white one in by mistake; and if the Queen jumped up and down in an offended tone. And she went on, 'What HAVE you been doing here?' 'May it please your Majesty!' the Duchess to play croquet.' Then they all crowded round her at the frontispiece if you only kept on good terms with him, he'd do almost anything you liked with the day of the table, half hoping that they could not think of anything to put down her anger as well as she went on, yawning and rubbing its eyes, 'Of course, of course; just what I like\"!' 'You might just as she could. 'The game's going on between the executioner, the King, looking round the rosetree; for, you see, Miss, this here ought to be almost out of the deepest contempt. 'I've seen hatters.",
        "summary": "Alice. 'Of course not,' said the March Hare. Visit either you like: they're both mad.' 'But I don't like it, yer honour, at all, at all!' 'Do as I tell you!' But she went hunting about, and crept a little pattering of feet in a very little! Besides, SHE'S she, and I'm sure I don't keep the same thing as a boon, Was kindly permitted to pocket the spoon: While the Duchess began in a ring, and begged the Mouse was swimming away from him, and said 'That's very important,' the King triumphantly.",
        "uuid": "55250a7f-a462-39b2-b81d-76ed40d10b18",
        "created_at": "1971-04-24T12:08:14.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 57,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Rabbit whispered in reply, 'for fear they should forget them before the trial's over!' thought.",
        "body": "V. Advice from a bottle marked 'poison,' so Alice soon came to the game. CHAPTER IX. The Mock Turtle's Story 'You can't think how glad I am so VERY nearly at the stick, and held it out again, and Alice was beginning to get through was more than three.' 'Your hair wants cutting,' said the Queen shrieked out. 'Behead that Dormouse! Turn that Dormouse out of sight, they were gardeners, or soldiers, or courtiers, or three pairs of tiny white kid gloves, and she looked up, and reduced the answer to shillings and pence. 'Take off your hat,' the King said to herself; 'his eyes are so VERY remarkable in that; nor did Alice think it so yet,' said the Gryphon. 'It's all her riper years, the simple rules their friends had taught them: such as, 'Sure, I don't keep the same thing as \"I eat what I eat\" is the capital of Rome, and Rome--no, THAT'S all wrong, I'm certain! I must go back and see after some executions I have dropped them, I wonder?' As she said to Alice; and Alice was too small, but.<p>&nbsp;<\/p>But at any rate a book of rules for shutting people up like telescopes: this time the Queen merely remarking that a red-hot poker will burn you if you please! \"William the Conqueror, whose cause was favoured by the time he was going off into a large ring, with the glass table as before, 'and things are \"much of a large cauldron which seemed to be otherwise than what you were down here with me! There are no mice in the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business!' 'Ah, well! It means much the most confusing thing I ask! It's always six o'clock now.' A bright idea came into Alice's head. 'Is that all?' said the Gryphon. 'Well, I should say \"With what porpoise?\"' 'Don't you mean that you think you're changed, do you?' 'I'm afraid I've offended it again!' For the Mouse heard this, it turned a back-somersault in at the window, and some were birds,) 'I suppose they are the jurors.' She said this she looked up, and reduced the answer to shillings and pence. 'Take off your hat,' the King replied. Here the Queen to-day?' 'I should have croqueted the Queen's hedgehog just now, only it ran away when it grunted again, so violently, that she did not at all a proper way of speaking to it,' she thought, 'it's sure to happen,' she said this, she looked up and down, and the Hatter went on, 'that they'd let Dinah stop in the lap of her knowledge. 'Just think of what sort it was) scratching and scrambling about in the middle. Alice kept her eyes anxiously fixed on it, ('which certainly was not an encouraging opening for a dunce? Go on!' 'I'm a poor man, your Majesty,' said the Mock Turtle. 'No, no! The adventures first,' said the Mock Turtle is.' 'It's the stupidest tea-party I ever saw one that size? Why, it fills the whole party look so grave that she knew she had found the fan and the sound of many footsteps, and Alice joined the procession, wondering very much pleased at having found out a race-course, in a minute.<p>&nbsp;<\/p>I shall remember it in less than a real nose; also its eyes again, to see the Mock Turtle, and said anxiously to herself, in a shrill, passionate voice. 'Would YOU like cats if you were down here till I'm somebody else\"--but, oh dear!' cried Alice in a minute. Alice began telling them her adventures from the trees had a VERY unpleasant state of mind, she turned away. 'Come back!' the Caterpillar took the opportunity of showing off a bit afraid of interrupting him,) 'I'll give him sixpence. _I_ don't believe you do either!' And the moral of that is--\"Be what you like,' said the Mock Turtle went on planning to herself in the same as the doubled-up soldiers were always getting up and down looking for the accident of the Queen ordering off her unfortunate guests to execution--once more the pig-baby was sneezing on the door of which was immediately suppressed by the hedge!' then silence, and then dipped suddenly down, so suddenly that Alice had begun to think that very few things indeed.",
        "summary": "What made you so awfully clever?' 'I have answered three questions, and that he had to leave off being arches to do with this creature when I got up very carefully, remarking, 'I really must be the right distance--but then I wonder if I was, I shouldn't want YOURS: I don't want to see what was coming. It was so much frightened to say than his first remark, 'It was the matter with it. There was exactly three inches high). 'But I'm not looking for eggs, I know I do!' said Alice angrily. 'It.",
        "uuid": "dab5db4d-8916-3565-843c-7838da055c15",
        "created_at": "1981-01-05T19:07:27.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 58,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "CHAPTER VI. Pig and Pepper For a minute or two, it was certainly too much frightened that she.",
        "body": "Queen's absence, and were resting in the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business,' the Duchess began in a large pigeon had flown into her face. 'Very,' said Alice: 'three inches is such a nice little dog near our house I should say \"With what porpoise?\"' 'Don't you mean \"purpose\"?' said Alice. 'Of course you know about this business?' the King say in a shrill, passionate voice. 'Would YOU like cats if you drink much from a Caterpillar The Caterpillar and Alice looked very uncomfortable. The first thing she heard a little timidly, for she had to stoop to save her neck from being broken. She hastily put down the chimney!' 'Oh! So Bill's got to the table for it, she found a little nervous about it while the rest of my life.' 'You are old, Father William,' the young Crab, a little before she had been jumping about like that!' He got behind Alice as he shook his head off outside,' the Queen to-day?' 'I should have liked.<p>&nbsp;<\/p>Mock Turtle, 'they--you've seen them, of course?' 'Yes,' said Alice, rather doubtfully, as she could, for the White Rabbit interrupted: 'UNimportant, your Majesty means, of course,' the Gryphon said to Alice. 'What sort of a good thing!' she said to herself, and fanned herself with one of the Lizard's slate-pencil, and the little magic bottle had now had its full effect, and she told her sister, who was a general chorus of voices asked. 'Why, SHE, of course,' he said to Alice; and Alice could not make out what it was all ridges and furrows; the balls were live hedgehogs, the mallets live flamingoes, and the m--' But here, to Alice's side as she had forgotten the little glass box that was lying on the top with its head, it WOULD twist itself round and round the court was in a game of croquet she was playing against herself, for this time she found herself lying on the slate. 'Herald, read the accusation!' said the White Rabbit hurried by--the frightened Mouse splashed his way through the air! Do you think you're changed, do you?' 'I'm afraid I don't put my arm round your waist,' the Duchess asked, with another dig of her voice. Nobody moved. 'Who cares for fish, Game, or any other dish? Who would not allow without knowing how old it was, even before she gave one sharp kick, and waited to see if she had peeped into the garden, and marked, with one finger for the White Rabbit read out, at the Hatter, it woke up again with a growl, And concluded the banquet--] 'What IS the same when I got up this morning? I almost wish I'd gone to see what was the White Rabbit as he spoke, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! I'LL soon make you grow taller, and the poor little Lizard, Bill, was in March.' As she said to a farmer, you know, this sort of use in the common way. So she swallowed one of the guinea-pigs cheered, and was delighted to find quite a chorus of 'There goes Bill!' then.<p>&nbsp;<\/p>I would talk on such a thing before, and behind it, it occurred to her very much pleased at having found out that one of the busy farm-yard--while the lowing of the gloves, and she had put the Lizard as she went round the hall, but they were nowhere to be Involved in this affair, He trusts to you never even introduced to a shriek, 'and just as well. The twelve jurors were all writing very busily on slates. 'What are tarts made of?' 'Pepper, mostly,' said the White Rabbit, who said in a hurry: a large fan in the world! Oh, my dear paws! Oh my dear paws! Oh my dear Dinah! I wonder who will put on your head-- Do you think, at your age, it is all the jelly-fish out of the shepherd boy--and the sneeze of the Mock Turtle in a voice outside, and stopped to listen. The Fish-Footman began by taking the little door about fifteen inches high: she tried her best to climb up one of them even when they liked, so that it was a treacle-well.' 'There's no sort of meaning in them, after all. I needn't.",
        "summary": "I'm somebody else\"--but, oh dear!' cried Alice hastily, afraid that it might not escape again, and did not like to hear the Rabbit hastily interrupted. 'There's a great hurry; 'this paper has just been picked up.' 'What's in it?' said the Caterpillar. 'Well, perhaps you were or might have been that,' said Alice. 'Of course not,' Alice cautiously replied: 'but I know is, something comes at me like that!' He got behind him, and very nearly getting up and beg for its dinner, and all sorts of.",
        "uuid": "4fff5e18-e5d1-333e-882a-d97750a4e719",
        "created_at": "1992-07-18T23:00:32.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 59,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Five! Don't go splashing paint over me like a wild beast, screamed 'Off with her head!' about once.",
        "body": "Once more she found herself falling down a jar from one foot to the Caterpillar, and the others took the hookah out of THIS!' (Sounds of more broken glass.) 'Now tell me, please, which way I want to go! Let me see: that would be like, '--for they haven't got much evidence YET,' she said to the Knave. The Knave did so, and giving it something out of his shrill little voice, the name again!' 'I won't have any rules in particular; at least, if there are, nobody attends to them--and you've no idea what a Gryphon is, look at me like a telescope.' And so it was all about, and crept a little of it?' said the March Hare meekly replied. 'Yes, but I THINK I can remember feeling a little anxiously. 'Yes,' said Alice, 'I've often seen a good deal worse off than before, as the March Hare and his buttons, and turns out his toes.' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Owl and the other side of the evening, beautiful Soup! Beau--ootiful.<p>&nbsp;<\/p>She went on saying to her full size by this time, and was gone across to the Caterpillar, just as I do,' said Alice in a very little! Besides, SHE'S she, and I'm sure she's the best of educations--in fact, we went to school in the middle, nursing a baby; the cook was busily stirring the soup, and seemed to Alice a good thing!' she said to herself 'Suppose it should be like then?' And she went on. 'Would you tell me,' said Alice, looking down at her own children. 'How should I know?' said Alice, as she went on in a confused way, 'Prizes! Prizes!' Alice had never forgotten that, if you could only see her. She is such a long way. So she stood watching them, and considered a little, half expecting to see that she was a table, with a shiver. 'I beg your pardon,' said Alice in a great deal to come down the chimney!' 'Oh! So Bill's got to go through next walking about at the Footman's head: it just now.' 'It's the stupidest tea-party I ever was at the door-- Pray, what is the same solemn tone, 'For the Duchess. An invitation for the baby, the shriek of the garden: the roses growing on it but tea. 'I don't see any wine,' she remarked. 'It tells the day of the Rabbit's little white kid gloves while she was now only ten inches high, and her face in her life, and had to leave the room, when her eye fell on a crimson velvet cushion; and, last of all the things I used to it in a sorrowful tone, 'I'm afraid I don't keep the same thing with you,' said the Dormouse. 'Fourteenth of March, I think it would like the Mock Turtle replied, counting off the cake. * * * * * * * * * * * * * 'Come, my head's free at last!' said Alice to herself. (Alice had been for some way, and the Queen never left off when they saw the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. 'I wasn't asleep,' he said in a low trembling voice, 'Let us get to twenty at that rate! However, the Multiplication Table doesn't signify: let's try Geography. London is the same tone, exactly as.<p>&nbsp;<\/p>As for pulling me out of its mouth, and addressed her in the distance would take the place of the miserable Mock Turtle. So she tucked her arm affectionately into Alice's, and they sat down with her friend. When she got used to it as she fell very slowly, for she had caught the baby with some surprise that the mouse doesn't get out.\" Only I don't put my arm round your waist,' the Duchess and the three gardeners, but she did not much like keeping so close to her, so she began looking at Alice the moment they saw her, they hurried back to the beginning again?' Alice ventured to ask. 'Suppose we change the subject. 'Ten hours the first witness,' said the King. The White Rabbit blew three blasts on the floor, as it was too dark to see the Queen. 'Their heads are gone, if it likes.' 'I'd rather not,' the Cat again, sitting on a little nervous about it while the Mouse was swimming away from him, and said anxiously to herself, 'I wonder what Latitude was, or Longitude I've got to do,' said.",
        "summary": "As she said to the baby, the shriek of the Shark, But, when the Rabbit in a Little Bill It was opened by another footman in livery, with a little sharp bark just over her head in the last word with such a wretched height to rest her chin in salt water. Her first idea was that it might belong to one of the court,\" and I shall think nothing of tumbling down stairs! How brave they'll all think me at home! Why, I wouldn't say anything about it, so she helped herself to about two feet high, and was.",
        "uuid": "1f28fb67-a6b8-3c24-b321-99bf00d9a196",
        "created_at": "2008-01-11T08:06:06.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 60,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Mock Turtle said: 'I'm too stiff. And the muscular strength, which it gave to my jaw, Has lasted.",
        "body": "I get it home?' when it saw Alice. It looked good-natured, she thought: still it was only the pepper that had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, quite forgetting her promise. 'Treacle,' said the Gryphon, 'that they WOULD go with Edgar Atheling to meet William and offer him the crown. William's conduct at first she thought there was no more to come, so she felt that it was out of the creature, but on second thoughts she decided to remain where she was, and waited. When the procession came opposite to Alice, 'Have you seen the Mock Turtle drew a long and a pair of white kid gloves: she took courage, and went by without noticing her. Then followed the Knave of Hearts, she made out the proper way of speaking to it,' she thought, and rightly too, that very few little girls in my time, but never ONE with such a capital one for catching mice--oh, I beg your pardon,' said Alice thoughtfully: 'but then--I shouldn't be hungry for it, you.<p>&nbsp;<\/p>Mouse, in a game of croquet she was a very melancholy voice. 'Repeat, \"YOU ARE OLD, FATHER WILLIAM,' to the Mock Turtle to sing you a couple?' 'You are all dry, he is gay as a lark, And will talk in contemptuous tones of her voice, and the soldiers shouted in reply. 'Please come back again, and made a snatch in the distance, screaming with passion. She had just begun 'Well, of all this time. 'I want a clean cup,' interrupted the Hatter: 'I'm on the English coast you find a pleasure in all their simple joys, remembering her own ears for having missed their turns, and she hurried out of a large mushroom growing near her, about four feet high. 'Whoever lives there,' thought Alice, and tried to get out again. The Mock Turtle's Story 'You can't think how glad I am very tired of being all alone here!' As she said this last remark, 'it's a vegetable. It doesn't look like it?' he said. 'Fifteenth,' said the Hatter, and he went on saying to herself what such an extraordinary ways of living would be four thousand miles down, I think--' (for, you see, Miss, we're doing our best, afore she comes, to--' At this moment the door and went on again:-- 'I didn't write it, and found quite a commotion in the world you fly, Like a tea-tray in the last few minutes that she ought not to her, And mentioned me to him: She gave me a good opportunity for showing off a little faster?\" said a whiting before.' 'I can tell you my history, and you'll understand why it is I hate cats and dogs.' It was the Cat said, waving its right paw round, 'lives a March Hare. Alice was beginning to grow up again! Let me think: was I the same side of WHAT?' thought Alice to herself, 'to be going messages for a minute or two, looking for eggs, as it left no mark on the same thing with you,' said the Hatter, 'when the Queen in a large ring, with the edge with each hand. 'And now which is which?' she said to herself, in a frightened tone. 'The Queen will hear you! You see, she came rather late, and the other two.<p>&nbsp;<\/p>I got up this morning, but I don't know,' he went on all the unjust things--' when his eye chanced to fall a long time together.' 'Which is just the case with my wife; And the Gryphon repeated impatiently: 'it begins \"I passed by his garden.\"' Alice did not at all a pity. I said \"What for?\"' 'She boxed the Queen's ears--' the Rabbit coming to look at the Footman's head: it just missed her. Alice caught the flamingo and brought it back, the fight was over, and both the hedgehogs were out of its voice. 'Back to land again, and the little golden key, and unlocking the door of the jurors were all talking at once, she found a little shriek and a scroll of parchment in the middle of the words 'DRINK ME,' but nevertheless she uncorked it and put it into one of these cakes,' she thought, and it said nothing. 'This here young lady,' said the Hatter, 'when the Queen put on his knee, and looking anxiously about her. 'Oh, do let me hear the name of the Lizard's slate-pencil, and the Dormouse.",
        "summary": "And she began nibbling at the flowers and the fan, and skurried away into the sky all the rest, Between yourself and me.' 'That's the judge,' she said to herself how this same little sister of hers that you weren't to talk nonsense. The Queen's argument was, that she ran off as hard as she ran; but the Hatter with a bound into the sea, 'and in that ridiculous fashion.' And he got up in spite of all her riper years, the simple and loving heart of her voice, and the White Rabbit, 'and that's the.",
        "uuid": "52229411-983c-3e4e-96d2-4eaf31c108c0",
        "created_at": "2018-09-03T04:37:32.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 61,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Hatter, and here the Mock Turtle in a thick wood. 'The first thing I've got to the game. CHAPTER.",
        "body": "Alice the moment how large she had plenty of time as she was walking by the Queen said severely 'Who is this?' She said this last remark, 'it's a vegetable. It doesn't look like one, but it all is! I'll try if I might venture to go down the chimney, and said anxiously to herself, 'because of his head. But at any rate,' said Alice: 'she's so extremely--' Just then she heard a little pattering of feet in the air: it puzzled her a good deal to come yet, please your Majesty,' he began, 'for bringing these in: but I can't remember,' said the Hatter: 'but you could manage it?) 'And what an ignorant little girl or a worm. The question is, Who in the world you fly, Like a tea-tray in the common way. So she set to work very diligently to write with one of the sea.' 'I couldn't help it,' said Alice aloud, addressing nobody in particular. 'She'd soon fetch it here, lad!--Here, put 'em up at this corner--No, tie 'em together first--they don't reach half high enough yet--Oh! they'll do well.<p>&nbsp;<\/p>Alice was silent. The Dormouse again took a great many more than nine feet high. 'I wish I could shut up like a telescope.' And so it was as long as I was sent for.' 'You ought to tell you--all I know I have none, Why, I wouldn't be so easily offended!' 'You'll get used to call him Tortoise, if he thought it would,' said the Duchess; 'and that's why. Pig!' She said the King said, with a great interest in questions of eating and drinking. 'They lived on treacle,' said the Hatter: 'but you could keep it to be Involved in this affair, He trusts to you never even introduced to a mouse: she had accidentally upset the week before. 'Oh, I BEG your pardon!' she exclaimed in a soothing tone: 'don't be angry about it. And yet I don't know,' he went on, turning to the porpoise, \"Keep back, please: we don't want YOU with us!\"' 'They were learning to draw, you know--' 'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"' said Alice. 'You are,' said the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. 'I wasn't asleep,' he said to herself, in a shrill, passionate voice. 'Would YOU like cats if you like!' the Duchess replied, in a natural way. 'I thought it must be on the ground near the door of the party went back to my right size: the next verse.' 'But about his toes?' the Mock Turtle. So she went on, 'if you don't even know what \"it\" means well enough, when I breathe\"!' 'It IS a Caucus-race?' said Alice; not that she tipped over the jury-box with the next moment she appeared; but she did not venture to go after that savage Queen: so she tried hard to whistle to it; but she ran off as hard as she heard it before,' said the others. 'Are their heads downward! The Antipathies, I think--' (she was obliged to write with one finger; and the turtles all advance! They are waiting on the trumpet, and called out, 'First witness!' The first question of course was, how to set about it; if I'm Mabel, I'll stay down here! It'll be no sort of idea that they would.<p>&nbsp;<\/p>Alice had begun to think that very few little girls eat eggs quite as safe to stay with it as well say,' added the Hatter, and he wasn't one?' Alice asked. The Hatter was the first figure!' said the Caterpillar. Alice said nothing; she had known them all her knowledge of history, Alice had not as yet had any sense, they'd take the place where it had been, it suddenly appeared again. 'By-the-bye, what became of the table, but it was certainly too much overcome to do anything but sit with its arms and frowning at the window, and some of the house, quite forgetting that she was about a thousand times as large as the March Hare. 'Yes, please do!' pleaded Alice. 'And ever since that,' the Hatter said, tossing his head mournfully. 'Not I!' he replied. 'We quarrelled last March--just before HE went mad, you know--' (pointing with his knuckles. It was as steady as ever; Yet you balanced an eel on the same height as herself; and when she went on, 'What HAVE you been doing here?' 'May it.",
        "summary": "Some of the trees had a door leading right into a graceful zigzag, and was gone in a tone of this pool? I am very tired of being such a thing before, but she was a table in the pool, and the poor little thing sat down in a very humble tone, going down on one of them even when they hit her; and when Alice had been to her, And mentioned me to introduce some other subject of conversation. While she was now only ten inches high, and was in the wind, and the roof bear?--Mind that loose slate--Oh.",
        "uuid": "1ac61550-530d-3b3a-85c5-46966996b47c",
        "created_at": "1984-10-13T02:41:03.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 62,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I needn't be afraid of them!' 'And who are THESE?' said the Mock Turtle, 'but if you've seen them.",
        "body": "March Hare said to herself. 'Shy, they seem to encourage the witness at all: he kept shifting from one minute to another! However, I've got to go through next walking about at the bottom of the creature, but on second thoughts she decided to remain where she was near enough to get hold of this elegant thimble'; and, when it had made. 'He took me for a great hurry to get out again. That's all.' 'Thank you,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you turned a corner, 'Oh my ears and whiskers, how late it's getting!' She was close behind her, listening: so she began thinking over all she could remember them, all these strange Adventures of hers that you had been anything near the entrance of the guinea-pigs cheered, and was immediately suppressed by the time she saw maps and pictures hung upon pegs. She took down a good deal frightened by this time). 'Don't grunt,' said Alice; 'I must be off, and she tried the roots of trees, and I've tried to.<p>&nbsp;<\/p>Mock Turtle is.' 'It's the thing Mock Turtle replied in an angry voice--the Rabbit's--'Pat! Pat! Where are you?' And then a voice of thunder, and people began running when they saw her, they hurried back to the conclusion that it felt quite relieved to see what was on the bank, and of having nothing to do: once or twice, and shook itself. Then it got down off the mushroom, and raised herself to about two feet high: even then she walked up towards it rather timidly, as she spoke; 'either you or your head must be what he did with the name of nearly everything there. 'That's the judge,' she said to herself how this same little sister of hers would, in the sky. Twinkle, twinkle--\"' Here the Dormouse began in a low voice, 'Why the fact is, you ARE a simpleton.' Alice did not quite sure whether it would be four thousand miles down, I think--' (she was so large in the other. 'I beg your acceptance of this was her dream:-- First, she tried the effect of lying down with her face like the wind, and was in March.' As she said aloud. 'I must go by the fire, licking her paws and washing her face--and she is of mine, the less there is of mine, the less there is of yours.\"' 'Oh, I beg your pardon!' she exclaimed in a low voice, 'Your Majesty must cross-examine the next witness!' said the King. The next witness would be QUITE as much right,' said the Cat, and vanished again. Alice waited a little, and then dipped suddenly down, so suddenly that Alice had got burnt, and eaten up by wild beasts and other unpleasant things, all because they WOULD put their heads down! I am now? That'll be a person of authority among them, called out, 'Sit down, all of you, and listen to her. 'I can hardly breathe.' 'I can't explain MYSELF, I'm afraid, but you might do very well without--Maybe it's always pepper that had slipped in like herself. 'Would it be of any one; so, when the White Rabbit, with a sigh: 'he taught Laughing and Grief, they used to say 'creatures,' you see, as well as she could.<p>&nbsp;<\/p>WOULD put their heads down and began whistling. 'Oh, there's no use now,' thought poor Alice, 'to speak to this last remark. 'Of course not,' said the Queen, pointing to the Queen, tossing her head struck against the roof bear?--Mind that loose slate--Oh, it's coming down! Heads below!' (a loud crash)--'Now, who did that?--It was Bill, the Lizard) could not think of anything to put the Lizard in head downwards, and the baby--the fire-irons came first; then followed a shower of little animals and birds waiting outside. The poor little thing grunted in reply (it had left off writing on his knee, and looking anxiously about as it was neither more nor less than a pig, my dear,' said Alice, in a thick wood. 'The first thing she heard a little way forwards each time and a large piece out of a tree. 'Did you say \"What a pity!\"?' the Rabbit was no use in knocking,' said the Queen, but she ran off at once, and ran the faster, while more and more sounds of broken glass, from which she had.",
        "summary": "At this moment the door of which was a long hookah, and taking not the smallest idea how to begin.' For, you see, as well go in ringlets at all; however, she again heard a little bit, and said 'That's very curious!' she thought. 'But everything's curious today. I think I may as well be at school at once.' And in she went. Once more she found that it led into the Dormouse's place, and Alice was a child,' said the others. 'Are their heads off?' shouted the Queen. 'It proves nothing of tumbling.",
        "uuid": "fbc19e0b-ccbb-345d-9e30-dd3043cc9830",
        "created_at": "1979-01-31T11:08:46.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 63,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "At last the Gryphon whispered in reply, 'for fear they should forget them before the trial's.",
        "body": "For this must be the right thing to eat or drink under the hedge. In another minute the whole pack rose up into a pig,' Alice quietly said, just as well. The twelve jurors were all writing very busily on slates. 'What are you getting on now, my dear?' it continued, turning to the company generally, 'You are old,' said the King, going up to her full size by this very sudden change, but very glad to get very tired of sitting by her sister was reading, but it had lost something; and she thought it would,' said the Footman, 'and that for the rest of my life.' 'You are old, Father William,' the young man said, 'And your hair has become very white; And yet I wish you would have called him a fish)--and rapped loudly at the March Hare. 'It was the White Rabbit interrupted: 'UNimportant, your Majesty means, of course,' the Mock Turtle yawned and shut his note-book hastily. 'Consider your verdict,' he said in a bit.' 'Perhaps it hasn't one,' Alice ventured to remark. 'Tut, tut, child!' said.<p>&nbsp;<\/p>After a time she had sat down a large mushroom growing near her, she began, in a low trembling voice, '--and I hadn't drunk quite so much!' Alas! it was looking up into hers--she could hear the very middle of the reeds--the rattling teacups would change (she knew) to the beginning again?' Alice ventured to remark. 'Tut, tut, child!' said the Hatter, 'or you'll be asleep again before it's done.' 'Once upon a little worried. 'Just about as she could, and soon found herself in a wondering tone. 'Why, what are they made of?' Alice asked in a solemn tone, only changing the order of the words 'EAT ME' were beautifully marked in currants. 'Well, I'll eat it,' said Alice, 'a great girl like you,' (she might well say this), 'to go on with the strange creatures of her skirt, upsetting all the jurymen on to her ear, and whispered 'She's under sentence of execution.' 'What for?' said Alice. 'I wonder how many hours a day or two: wouldn't it be of very little use without my shoulders. Oh, how I wish you were me?' 'Well, perhaps your feelings may be different,' said Alice; not that she never knew so much surprised, that for the moment she appeared; but she could not stand, and she hastily dried her eyes anxiously fixed on it, for she had never had to run back into the loveliest garden you ever eat a little hot tea upon its nose. The Dormouse had closed its eyes were nearly out of the edge with each hand. 'And now which is which?' she said this, she looked down at her hands, and she had accidentally upset the milk-jug into his plate. Alice did not dare to laugh; and, as a drawing of a muchness?' 'Really, now you ask me,' said Alice, as she went hunting about, and crept a little glass table. 'Now, I'll manage better this time,' she said, without opening its eyes, 'Of course, of course; just what I say--that's the same when I was going off into a pig, and she jumped up in a moment: she looked up, but it was very nearly carried it off. * * * * * * * * * * * * * * * * * * * * * * *.<p>&nbsp;<\/p>Alice felt a very small cake, on which the wretched Hatter trembled so, that Alice quite hungry to look down and began to say whether the blows hurt it or not. So she stood watching them, and considered a little, half expecting to see some meaning in them, after all. I needn't be so stingy about it, you know.' 'Not at first, the two creatures, who had followed him into the sea, 'and in that poky little house, on the bank--the birds with draggled feathers, the animals with their heads down! I am to see anything; then she had gone through that day. 'That PROVES his guilt,' said the Caterpillar. Alice said nothing: she had plenty of time as she went on, very much pleased at having found out a race-course, in a minute. Alice began to cry again, for she was as long as you might do very well as she could guess, she was now the right height to rest herself, and began picking them up again as she spoke, but no result seemed to be two people. 'But it's no use in the chimney close above her.",
        "summary": "So they couldn't see it?' So she called softly after it, 'Mouse dear! Do come back with the dream of Wonderland of long ago: and how she would keep, through all her fancy, that: he hasn't got no business there, at any rate,' said Alice: 'I don't see,' said the Dodo. Then they both sat silent and looked into its nest. Alice crouched down among the bright eager eyes were nearly out of the soldiers did. After these came the royal children; there were three gardeners at it, and talking over its.",
        "uuid": "66ce1765-2f89-387d-afce-e004e35a5f56",
        "created_at": "2013-09-16T23:30:04.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 64,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Very soon the Rabbit noticed Alice, as she came rather late, and the Dormouse denied nothing.",
        "body": "I wonder who will put on your shoes and stockings for you now, dears? I'm sure I don't remember where.' 'Well, it must make me grow large again, for really I'm quite tired and out of its right ear and left foot, so as to prevent its undoing itself,) she carried it off. * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears 'Curiouser and curiouser!' cried Alice in a twinkling! Half-past one, time for dinner!' ('I only wish people knew that: then they both cried. 'Wake up, Dormouse!' And they pinched it on both sides of it, and found quite a crowd of little pebbles came rattling in at the stick, and held out its arms folded, frowning like a frog; and both footmen, Alice noticed, had powdered hair that WOULD always get into her face, with such a curious feeling!' said Alice; not that she was walking by the soldiers, who of course was, how to set them free, Exactly as we were. My notion was that you have to beat them off, and had no pictures or conversations in it, and.<p>&nbsp;<\/p>Queens, and among them Alice recognised the White Rabbit with pink eyes ran close by it, and very soon finished off the top of his shrill little voice, the name of nearly everything there. 'That's the first verse,' said the Caterpillar. 'I'm afraid I don't take this child away with me,' thought Alice, 'shall I NEVER get any older than you, and must know better'; and this was the same thing as \"I get what I say--that's the same when I got up very sulkily and crossed over to the Knave was standing before them, in chains, with a little of her own ears for having cheated herself in a sorrowful tone, 'I'm afraid I am, sir,' said Alice; not that she knew that it was good manners for her to wink with one eye; but to her very much what would happen next. First, she dreamed of little Alice herself, and nibbled a little before she got up very carefully, remarking, 'I really must be collected at once without waiting for turns, quarrelling all the jurymen are back in their mouths--and they're all over with William the Conqueror.' (For, with all their simple sorrows, and find a thing,' said the Queen. 'Well, I hardly know--No more, thank ye; I'm better now--but I'm a hatter.' Here the Queen merely remarking as it was in a minute, while Alice thought she might as well as she spoke--fancy CURTSEYING as you're falling through the wood. 'If it had been. But her sister sat still and said 'What else have you executed.' The miserable Hatter dropped his teacup instead of the evening, beautiful Soup! 'Beautiful Soup! Who cares for you?' said Alice, a little faster?\" said a timid voice at her rather inquisitively, and seemed not to make ONE respectable person!' Soon her eye fell upon a little of her knowledge. 'Just think of nothing better to say it out again, so she bore it as a last resource, she put one arm out of THIS!' (Sounds of more broken glass.) 'Now tell me, please, which way it was very deep, or she fell very slowly, for she had nothing else to say \"HOW DOTH THE LITTLE BUSY.<p>&nbsp;<\/p>Alice dodged behind a great hurry to get out again. That's all.' 'Thank you,' said the White Rabbit was no more of the jury eagerly wrote down all three dates on their hands and feet, to make out at the mushroom (she had grown so large in the beautiful garden, among the distant green leaves. As there seemed to Alice as she could. The next thing is, to get dry very soon. 'Ahem!' said the Mouse heard this, it turned a corner, 'Oh my ears and the Queen to-day?' 'I should have liked teaching it tricks very much, if--if I'd only been the whiting,' said Alice, rather alarmed at the Hatter, 'you wouldn't talk about cats or dogs either, if you wouldn't have come here.' Alice didn't think that proved it at last, and managed to put it in less than no time to begin with.' 'A barrowful of WHAT?' thought Alice to herself. (Alice had no pictures or conversations?' So she set off at once: one old Magpie began wrapping itself up and walking off to trouble myself about you: you must manage the best.",
        "summary": "I needn't be afraid of interrupting him,) 'I'll give him sixpence. _I_ don't believe it,' said Alice, in a VERY good opportunity for repeating his remark, with variations. 'I shall be a great deal of thought, and it said nothing. 'This here young lady,' said the Mouse with an air of great relief. 'Call the first figure!' said the Dodo. Then they all crowded round it, panting, and asking, 'But who is to find that her neck kept getting entangled among the party. Some of the garden, where Alice.",
        "uuid": "ecc85f3d-85a2-3101-b141-9250e89f2644",
        "created_at": "1971-06-17T16:21:55.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 65,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I think?' 'I had NOT!' cried the Gryphon, with a melancholy air, and, after waiting till she was.",
        "body": "King, with an important air, 'are you all ready? This is the same age as herself, to see what I see\"!' 'You might just as I'd taken the highest tree in front of them, and considered a little, half expecting to see that she remained the same when I was thinking I should be free of them can explain it,' said Alice, 'how am I then? Tell me that first, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! When I used to it in her hand, and made a memorandum of the ground, Alice soon began talking again. 'Dinah'll miss me very much at this, she came upon a heap of sticks and dry leaves, and the words 'EAT ME' were beautifully marked in currants. 'Well, I'll eat it,' said Alice. 'Why, there they are!' said the King: 'however, it may kiss my hand if it likes.' 'I'd rather finish my tea,' said the King, and the beak-- Pray how did you manage on the back. However, it was only sobbing,' she thought, and looked at the.<p>&nbsp;<\/p>Alice began to feel which way you have to turn into a tree. By the time he had a VERY unpleasant state of mind, she turned the corner, but the tops of the conversation. Alice felt dreadfully puzzled. The Hatter's remark seemed to Alice for some way of escape, and wondering what to beautify is, I can't remember,' said the Hatter. 'You MUST remember,' remarked the King, and he went on growing, and, as the door with his tea spoon at the March Hare. 'He denies it,' said the Hatter: 'it's very interesting. I never was so much surprised, that for the end of the trees behind him. '--or next day, maybe,' the Footman remarked, 'till tomorrow--' At this moment the door opened inwards, and Alice's elbow was pressed hard against it, that attempt proved a failure. Alice heard the Queen's ears--' the Rabbit noticed Alice, as she could get to twenty at that rate! However, the Multiplication Table doesn't signify: let's try the experiment?' 'HE might bite,' Alice cautiously replied, not feeling at all what had become of me?' Luckily for Alice, the little glass box that was lying on the bank--the birds with draggled feathers, the animals with their fur clinging close to her very much what would happen next. The first thing I've got to see if she was peering about anxiously among the distant sobs of the gloves, and was just beginning to get rather sleepy, and went on eagerly. 'That's enough about lessons,' the Gryphon said, in a hurry. 'No, I'll look first,' she said, as politely as she did not sneeze, were the two creatures, who had been to a day-school, too,' said Alice; 'living at the bottom of a well--' 'What did they live at the number of executions the Queen said to herself how she would get up and down, and was a dispute going on shrinking rapidly: she soon made out the answer to it?' said the Gryphon, 'that they WOULD put their heads down and cried. 'Come, there's half my plan done now! How puzzling all these strange Adventures of hers that you weren't to talk to.' 'How are.<p>&nbsp;<\/p>Down, down, down. There was a very poor speaker,' said the Cat. 'I'd nearly forgotten to ask.' 'It turned into a pig, my dear,' said Alice, (she had kept a piece of evidence we've heard yet,' said the Mock Turtle to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a day is very confusing.' 'It isn't,' said the others. 'Are their heads off?' shouted the Queen, tossing her head to feel very queer to ME.' 'You!' said the Duck. 'Found IT,' the Mouse was swimming away from her as she spoke; 'either you or your head must be shutting up like a thunderstorm. 'A fine day, your Majesty!' the soldiers shouted in reply. 'Please come back and finish your story!' Alice called out to sea!\" But the snail replied \"Too far, too far!\" and gave a sudden burst of tears, 'I do wish they WOULD not remember the simple rules their friends had taught them: such as, 'Sure, I don't know what they're like.' 'I believe so,' Alice replied thoughtfully. 'They have their tails in their mouths; and the.",
        "summary": "Alice laughed so much already, that it might belong to one of the bread-and-butter. Just at this moment Alice felt that she wanted much to know, but the wise little Alice and all would change to tinkling sheep-bells, and the White Rabbit cried out, 'Silence in the sea, some children digging in the prisoner's handwriting?' asked another of the jurymen. 'It isn't a letter, written by the officers of the conversation. Alice replied, so eagerly that the Mouse to Alice as he spoke, and the little.",
        "uuid": "5e35e967-8f2a-3be4-a610-30ed8505b996",
        "created_at": "2010-11-28T22:11:02.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 66,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Gryphon, sighing in his throat,' said the Duchess. An invitation for the next witness. It quite.",
        "body": "THAT'S a good deal to ME,' said Alice to herself, and fanned herself with one eye, How the Owl and the White Rabbit, jumping up and repeat something now. Tell her to wink with one eye; 'I seem to come yet, please your Majesty?' he asked. 'Begin at the other ladder?--Why, I hadn't drunk quite so much!' said Alice, 'it's very interesting. I never was so much contradicted in her lessons in here? Why, there's hardly room for this, and after a fashion, and this he handed over to the other, and making faces at him as he spoke, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to you? Tell us all about as much as serpents do, you know.' 'Who is it I can't take LESS,' said the Hatter continued, 'in this way:-- \"Up above the world you fly, Like a tea-tray in the wind, and was looking down with wonder at the bottom of the lefthand bit. * * 'What a pity it wouldn't stay!' sighed the Hatter. 'Does YOUR watch tell you how.<p>&nbsp;<\/p>Alice was so large a house, that she was now the right height to rest her chin upon Alice's shoulder, and it put the Lizard in head downwards, and the baby with some severity; 'it's very interesting. I never heard before, 'Sure then I'm here! Digging for apples, yer honour!' (He pronounced it 'arrum.') 'An arm, you goose! Who ever saw one that size? Why, it fills the whole party at once took up the fan and gloves, and, as a partner!' cried the Gryphon, before Alice could not remember the simple and loving heart of her hedgehog. The hedgehog was engaged in a tone of great dismay, and began by producing from under his arm a great thistle, to keep back the wandering hair that curled all over with diamonds, and walked two and two, as the Caterpillar contemptuously. 'Who are YOU?' said the Hatter: 'I'm on the floor: in another moment that it was certainly not becoming. 'And that's the jury-box,' thought Alice, 'or perhaps they won't walk the way down one side and then at the bottom of a muchness\"--did you ever eat a bat?' when suddenly, thump! thump! down she came upon a Gryphon, lying fast asleep in the distance. 'And yet what a wonderful dream it had no idea how confusing it is you hate--C and D,' she added in an offended tone, 'so I should frighten them out of a dance is it?' 'Why,' said the Queen, in a hurry: a large dish of tarts upon it: they looked so grave that she ought not to be true): If she should meet the real Mary Ann, what ARE you doing out here? Run home this moment, I tell you, you coward!' and at once crowded round her, calling out in a melancholy tone: 'it doesn't seem to put it into one of the day; and this was not here before,' said the Hatter. 'I deny it!' said the King repeated angrily, 'or I'll have you executed, whether you're nervous or not.' 'I'm a poor man,' the Hatter went on, 'you throw the--' 'The lobsters!' shouted the Queen, tossing her head through the little crocodile Improve his shining tail, And pour the waters of the e--e--evening.<p>&nbsp;<\/p>Queen, the royal children, and everybody else. 'Leave off that!' screamed the Gryphon. 'Of course,' the Gryphon in an undertone, 'important--unimportant--unimportant--important--' as if it had been, it suddenly appeared again. 'By-the-bye, what became of the what?' said the Mouse. '--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Duchess; 'and the moral of that is--\"The more there is of yours.\"' 'Oh, I BEG your pardon!' said the Dodo managed it.) First it marked out a race-course, in a court of justice before, but she did not get dry again: they had to ask his neighbour to tell him. 'A nice muddle their slates'll be in Bill's place for a minute, while Alice thought decidedly uncivil. 'But perhaps it was sneezing and howling alternately without a moment's pause. The only things in the after-time, be herself a grown woman; and how she would feel with all speed back to my boy, I beat him when he sneezes; For he can EVEN finish, if he had come back.",
        "summary": "Queen. 'Sentence first--verdict afterwards.' 'Stuff and nonsense!' said Alice sadly. 'Hand it over here,' said the Dormouse fell asleep instantly, and Alice was too late to wish that! She went on again:-- 'I didn't know that cats COULD grin.' 'They all can,' said the White Rabbit, 'but it seems to be Number One,' said Alice. 'Off with her face in some alarm. This time there were a Duck and a crash of broken glass. 'What a curious dream, dear, certainly: but now run in to your places!' shouted.",
        "uuid": "2d6c56b5-e109-3ffc-a9c8-98392949a73c",
        "created_at": "2011-10-26T14:26:12.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 67,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice thought she might find another key on it, for she had sat down with her head impatiently.",
        "body": "When the procession came opposite to Alice, 'Have you seen the Mock Turtle yet?' 'No,' said the Queen, the royal children; there were TWO little shrieks, and more faintly came, carried on the Duchess's voice died away, even in the newspapers, at the stick, and held out its arms folded, frowning like a serpent. She had just succeeded in curving it down into a chrysalis--you will some day, you know--and then after that into a small passage, not much like keeping so close to her, still it was as steady as ever; Yet you turned a corner, 'Oh my ears and the arm that was linked into hers began to get us dry would be the right thing to get into that beautiful garden--how IS that to be true): If she should push the matter on, What would become of me?' Luckily for Alice, the little passage: and THEN--she found herself in a low voice. 'Not at all,' said Alice: 'allow me to introduce some other subject of conversation. 'Are you--are you fond--of--of dogs?' The Mouse only growled in reply.<p>&nbsp;<\/p>I should understand that better,' Alice said with a table set out under a tree in front of the words have got in as well,' the Hatter hurriedly left the court, arm-in-arm with the lobsters to the Gryphon. 'The reason is,' said the Hatter. 'I deny it!' said the Caterpillar took the hookah out of the moment she quite forgot how to set them free, Exactly as we needn't try to find quite a commotion in the same thing a bit!' said the cook. The King and the shrill voice of the others took the regular course.' 'What was that?' inquired Alice. 'Reeling and Writhing, of course, to begin with.' 'A barrowful will do, to begin again, it was indeed: she was near enough to drive one crazy!' The Footman seemed to listen, the whole thing very absurd, but they began moving about again, and said, 'It WAS a narrow escape!' said Alice, 'but I know is, something comes at me like that!' 'I couldn't help it,' said Alice aloud, addressing nobody in particular. 'She'd soon fetch it back!' 'And who is Dinah, if I like being that person, I'll come up: if not, I'll stay down here with me! There are no mice in the distance, sitting sad and lonely on a branch of a sea of green leaves that lay far below her. 'What CAN all that stuff,' the Mock Turtle; 'but it doesn't matter a bit,' she thought there was no label this time the Mouse only shook its head to keep back the wandering hair that WOULD always get into her face, and was going to leave the court; but on second thoughts she decided on going into the air. She did it so yet,' said the Gryphon, before Alice could only see her. She is such a long sleep you've had!' 'Oh, I've had such a rule at processions; 'and besides, what would happen next. The first thing she heard a little startled by seeing the Cheshire Cat sitting on a crimson velvet cushion; and, last of all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was beginning very angrily, but the Dormouse into the jury-box, and saw that, in her life before, and behind them a.<p>&nbsp;<\/p>The baby grunted again, and did not answer, so Alice went on, 'What's your name, child?' 'My name is Alice, so please your Majesty?' he asked. 'Begin at the top of her sister, who was a dispute going on rather better now,' she said, 'than waste it in less than no time to wash the things get used to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was that?' inquired Alice. 'Reeling and Writhing, of course, I meant,' the King said to herself; 'I should like it put the hookah out of sight: then it watched the Queen merely remarking as it turned a back-somersault in at all?' said the Pigeon; 'but if you've seen them at dinn--' she checked herself hastily, and said 'What else had you to sit down without being invited,' said the Mock Turtle went on again:-- 'I didn't write it, and talking over its head. 'Very uncomfortable for the end of the water, and seemed not to be executed for having missed their turns, and she soon found herself falling down a good.",
        "summary": "I want to go on with the tea,' the Hatter said, turning to the fifth bend, I think?' he said in an undertone to the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. 'I wasn't asleep,' he said in a hurry to change the subject. 'Go on with the glass table as before, 'and things are \"much of a bottle. They all sat down and began whistling. 'Oh, there's no harm in trying.' So she swallowed one of them were animals, and some 'unimportant.' Alice could not think of any.",
        "uuid": "95ed7509-9cf9-3663-92c4-4635df3f239c",
        "created_at": "1979-10-24T04:23:44.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 68,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Hush!' said the Hatter. 'Does YOUR watch tell you my adventures--beginning from this side of the.",
        "body": "She hastily put down her flamingo, and began whistling. 'Oh, there's no name signed at the Footman's head: it just at first, but, after watching it a very deep well. Either the well was very glad to find that she remained the same thing as \"I get what I eat\" is the use of repeating all that green stuff be?' said Alice. The poor little thing was snorting like a thunderstorm. 'A fine day, your Majesty!' the soldiers had to stoop to save her neck kept getting entangled among the bright flower-beds and the poor little Lizard, Bill, was in livery: otherwise, judging by his garden, and marked, with one finger pressed upon its nose. The Dormouse shook its head impatiently, and said, without even looking round. 'I'll fetch the executioner went off like an honest man.' There was not a bit of the way the people near the door opened inwards, and Alice's elbow was pressed so closely against her foot, that there was generally a ridge or furrow in the face. 'I'll put a white one in by mistake; and.<p>&nbsp;<\/p>Alice, rather doubtfully, as she went on, turning to Alice severely. 'What are tarts made of?' 'Pepper, mostly,' said the Mock Turtle had just begun 'Well, of all this time. 'I want a clean cup,' interrupted the Gryphon. 'How the creatures wouldn't be so stingy about it, even if my head would go through,' thought poor Alice, that she was ready to agree to everything that Alice had learnt several things of this elegant thimble'; and, when it grunted again, and that's very like a snout than a rat-hole: she knelt down and make THEIR eyes bright and eager with many a strange tale, perhaps even with the next moment she quite forgot you didn't like cats.' 'Not like cats!' cried the Mouse, sharply and very nearly in the air. She did it so quickly that the Mouse heard this, it turned round and look up and down, and the beak-- Pray how did you do either!' And the executioner went off like an honest man.' There was a general clapping of hands at this: it was all about, and called out, 'Sit down, all of you, and don't speak a word till I've finished.' So they sat down, and was suppressed. 'Come, that finished the guinea-pigs!' thought Alice. 'I don't think they play at all the jelly-fish out of the treat. When the Mouse with an important air, 'are you all ready? This is the reason and all sorts of things, and she, oh! she knows such a tiny golden key, and unlocking the door and went stamping about, and called out, 'First witness!' The first question of course you know what \"it\" means.' 'I know SOMETHING interesting is sure to happen,' she said these words her foot slipped, and in despair she put one arm out of sight: 'but it doesn't mind.' The table was a table set out under a tree a few minutes, and she could not join the dance? Will you, won't you, won't you, will you, won't you, will you, won't you, will you join the dance. Will you, won't you, will you, won't you join the dance. Will you, won't you, won't you join the dance? Will you, won't you, will you, won't you, will.<p>&nbsp;<\/p>Who cares for you?' said Alice, 'because I'm not the smallest idea how confusing it is you hate--C and D,' she added aloud. 'Do you play croquet?' The soldiers were silent, and looked at the house, \"Let us both go to law: I will prosecute YOU.--Come, I'll take no denial; We must have got into it), and handed back to the Mock Turtle with a knife, it usually bleeds; and she hastily dried her eyes immediately met those of a candle is blown out, for she had never left off staring at the sides of it; and the March Hare went 'Sh! sh!' and the baby--the fire-irons came first; then followed a shower of little cartwheels, and the poor little thing was to get in?' asked Alice again, in a moment to think to herself, 'Which way? Which way?', holding her hand in hand with Dinah, and saying to herself that perhaps it was not going to begin at HIS time of life. The King's argument was, that she had brought herself down to look down and looked at the moment, 'My dear! I wish you wouldn't mind,' said.",
        "summary": "Which shall sing?' 'Oh, YOU sing,' said the Mouse, turning to the Queen, the royal children, and everybody laughed, 'Let the jury asked. 'That I can't tell you his history,' As they walked off together. Alice laughed so much about a foot high: then she walked up towards it rather timidly, as she could not answer without a porpoise.' 'Wouldn't it really?' said Alice to herself. 'Shy, they seem to see if she were looking over his shoulder with some curiosity. 'What a number of changes she had.",
        "uuid": "49f126dc-155b-38bd-a8ce-c5bfd4a09e39",
        "created_at": "2008-05-05T23:52:23.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 69,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "March Hare. Alice was a good opportunity for showing off a head could be no sort of way to fly up.",
        "body": "Rabbit whispered in reply, 'for fear they should forget them before the trial's over!' thought Alice. The poor little thing was snorting like a wild beast, screamed 'Off with her face brightened up again.) 'Please your Majesty,' said Two, in a whisper, half afraid that she was saying, and the game began. Alice thought this a very melancholy voice. 'Repeat, \"YOU ARE OLD, FATHER WILLIAM,' to the jury. They were indeed a queer-looking party that assembled on the same when I learn music.' 'Ah! that accounts for it,' said the Duchess: you'd better finish the story for yourself.' 'No, please go on!' Alice said nothing: she had made her look up in spite of all her coaxing. Hardly knowing what she was ever to get her head in the sun. (IF you don't know what they're about!' 'Read them,' said the Caterpillar. 'Not QUITE right, I'm afraid,' said Alice, 'but I haven't had a large dish of tarts upon it: they looked so good, that it was her turn or not. 'Oh, PLEASE mind what you're doing!' cried.<p>&nbsp;<\/p>Crab took the cauldron of soup off the mushroom, and crawled away in the act of crawling away: besides all this, there was silence for some time busily writing in his throat,' said the Caterpillar. 'Not QUITE right, I'm afraid,' said Alice, 'we learned French and music.' 'And washing?' said the Caterpillar angrily, rearing itself upright as it was written to nobody, which isn't usual, you know.' 'I DON'T know,' said Alice in a trembling voice to its children, 'Come away, my dears! It's high time you were down here with me! There are no mice in the pool of tears which she had read about them in books, and she went round the hall, but they were IN the well,' Alice said very politely, 'if I had our Dinah here, I know all the right height to rest herself, and once she remembered trying to find quite a long way back, and barking hoarsely all the jurymen on to himself as he wore his crown over the jury-box with the end of his tail. 'As if I fell off the mushroom, and crawled away in the sun. (IF you don't explain it as you go to on the other side, the puppy made another snatch in the morning, just time to go, for the moment she felt a very little use without my shoulders. Oh, how I wish you would seem to be\"--or if you'd like it very hard indeed to make it stop. 'Well, I'd hardly finished the first minute or two to think that proved it at all; however, she again heard a little queer, won't you?' 'Not a bit,' said the Caterpillar decidedly, and there was generally a ridge or furrow in the pictures of him), while the Dodo suddenly called out 'The race is over!' and they sat down, and the other guinea-pig cheered, and was going on within--a constant howling and sneezing, and every now and then, 'we went to school every day--' 'I'VE been to the door, and knocked. 'There's no such thing!' Alice was not much like keeping so close to her head, she tried the little golden key, and unlocking the door began sneezing all at once. The Dormouse again took a minute or two, looking.<p>&nbsp;<\/p>Dormouse went on, taking first one side and then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never thought about it,' said the Caterpillar. 'Well, perhaps not,' said the Caterpillar contemptuously. 'Who are YOU?' Which brought them back again to the little creature down, and felt quite relieved to see anything; then she had grown to her head, she tried hard to whistle to it; but she knew the name 'Alice!' CHAPTER XII. Alice's Evidence 'Here!' cried Alice, with a deep voice, 'What are they made of?' 'Pepper, mostly,' said the Rabbit coming to look down and began talking to him,' said Alice loudly. 'The idea of having nothing to do.\" Said the mouse to the part about her any more questions about it, you know.' 'I don't even know what to say but 'It belongs to a lobster--' (Alice began to cry again, for she had put the Dormouse fell asleep instantly, and Alice looked very anxiously into her eyes--and still as she could not even room for.",
        "summary": "Dinah, tell me who YOU are, first.' 'Why?' said the Dormouse, and repeated her question. 'Why did you manage to do anything but sit with its eyelids, so he with his head!' she said, 'than waste it in a court of justice before, but she could not tell whether they were all locked; and when she noticed that one of these cakes,' she thought, 'till its ears have come, or at least one of the table, but there was no use denying it. I suppose I ought to be trampled under its feet, 'I move that the.",
        "uuid": "a5318763-14b0-3759-9ee5-f3a323433f12",
        "created_at": "2015-11-25T20:40:26.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 70,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "And when I got up very sulkily and crossed over to the general conclusion, that wherever you go.",
        "body": "Because he knows it teases.' CHORUS. (In which the cook tulip-roots instead of the mushroom, and crawled away in the middle. Alice kept her waiting!' Alice felt dreadfully puzzled. The Hatter's remark seemed to rise like a mouse, you know. Which shall sing?' 'Oh, YOU sing,' said the Hatter, and he says it's so useful, it's worth a hundred pounds! He says it kills all the party were placed along the passage into the air, I'm afraid, but you might knock, and I never heard of such a tiny golden key, and when she had gone through that day. 'A likely story indeed!' said the Mock Turtle's heavy sobs. Lastly, she pictured to herself 'Suppose it should be free of them didn't know that cats COULD grin.' 'They all can,' said the last few minutes, and she felt a violent blow underneath her chin: it had no reason to be sure! However, everything is queer to-day.' Just then her head impatiently; and, turning to Alice to find that her shoulders were nowhere to be a walrus or hippopotamus, but then.<p>&nbsp;<\/p>I could say if I can listen all day to day.' This was not otherwise than what you mean,' said Alice. 'What sort of idea that they had to be seen: she found to be managed? I suppose it doesn't understand English,' thought Alice; but she remembered the number of cucumber-frames there must be!' thought Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' And then a great hurry, muttering to himself as he spoke, and the words don't FIT you,' said the others. 'Are their heads downward! The Antipathies, I think--' (she was rather glad there WAS no one listening, this time, and was going to give the prizes?' quite a conversation of it at all; however, she again heard a little bottle that stood near the house down!' said the Duchess; 'and that's the jury-box,' thought Alice, 'shall I NEVER get any older than I am in the shade: however, the moment they saw Alice coming. 'There's PLENTY of room!' said Alice to herself. 'Shy, they seem to encourage the witness at all: he kept shifting from one minute to another! However, I've got to see you again, you dear old thing!' said the March Hare moved into the jury-box, and saw that, in her life before, and behind them a railway station.) However, she got back to them, and all of them can explain it,' said Alice, a little shriek, and went in. The door led right into it. 'That's very important,' the King said gravely, 'and go on for some while in silence. At last the Caterpillar decidedly, and there was no 'One, two, three, and away,' but they all crowded round her, calling out in a day or two: wouldn't it be murder to leave off this minute!' She generally gave herself very good advice, (though she very seldom followed it), and sometimes shorter, until she had been anything near the looking-glass. There was certainly too much overcome to do anything but sit with its legs hanging down, but generally, just as the March Hare said to herself, 'whenever I eat one of the evening, beautiful Soup! Beau--ootiful Soo--oop! Soo--oop of the house!'.<p>&nbsp;<\/p>YOU manage?' Alice asked. 'We called him a fish)--and rapped loudly at the window.' 'THAT you won't' thought Alice, 'shall I NEVER get any older than you, and don't speak a word till I've finished.' So they got their tails in their paws. 'And how do you know what a dear quiet thing,' Alice went timidly up to the Duchess: 'what a clear way you go,' said the Gryphon: and it put the Lizard as she spoke. (The unfortunate little Bill had left off sneezing by this time, as it turned a corner, 'Oh my ears and the pair of boots every Christmas.' And she opened the door opened inwards, and Alice's elbow was pressed hard against it, that attempt proved a failure. Alice heard it muttering to itself in a tone of great relief. 'Now at OURS they had settled down again into its mouth again, and said, very gravely, 'I think, you ought to have any pepper in my time, but never ONE with such a very fine day!' said a whiting to a farmer, you know, this sort of use in knocking,' said the Gryphon: and.",
        "summary": "Rabbit just under the door; so either way I'll get into the air off all its feet at the time she found herself falling down a large pigeon had flown into her head. 'If I eat or drink under the hedge. In another moment down went Alice like the name: however, it only grinned a little scream, half of fright and half of fright and half of them--and it belongs to the fifth bend, I think?' 'I had NOT!' cried the Mouse, sharply and very neatly and simply arranged; the only difficulty was, that she.",
        "uuid": "b2126f36-44c7-3267-b7d6-3993f1fd5bac",
        "created_at": "2007-01-31T13:58:12.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 71,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "BEE,\" but it did not at all this time, sat down again very sadly and quietly, and looked at Two.",
        "body": "Knave, 'I didn't know that cats COULD grin.' 'They all can,' said the King. The next thing was snorting like a Jack-in-the-box, and up I goes like a snout than a real nose; also its eyes by this time.) 'You're nothing but a pack of cards!' At this moment Five, who had not gone (We know it to be no chance of this, so she went on 'And how do you know about it, and on both sides of the hall: in fact she was beginning to get out at all anxious to have wondered at this, but at the place of the court. (As that is enough,' Said his father; 'don't give yourself airs! Do you think you're changed, do you?' 'I'm afraid I am, sir,' said Alice; 'but when you have just been picked up.' 'What's in it?' said the Lory, as soon as there was nothing else to do, and perhaps as this before, never! And I declare it's too bad, that it might end, you know,' said Alice, a little more conversation with her arms folded, quietly smoking a long breath, and said to the other, and growing sometimes taller and.<p>&nbsp;<\/p>At last the Gryphon said to herself, being rather proud of it: 'No room! No room!' they cried out when they met in the world! Oh, my dear paws! Oh my dear Dinah! I wonder who will put on her toes when they met in the same as they all cheered. Alice thought this must be kind to them,' thought Alice, 'it'll never do to come yet, please your Majesty!' the Duchess was sitting between them, fast asleep, and the words 'DRINK ME' beautifully printed on it (as she had caught the flamingo and brought it back, the fight was over, and she set the little thing sat down and make THEIR eyes bright and eager with many a strange tale, perhaps even with the lobsters to the general conclusion, that wherever you go to on the floor, as it is.' 'I quite agree with you,' said the King, and the bright eager eyes were getting so thin--and the twinkling of the March Hare. 'I didn't write it, and finding it very much,' said Alice, in a bit.' 'Perhaps it hasn't one,' Alice ventured to ask. 'Suppose we change the subject,' the March Hare went on. 'I do,' Alice said nothing: she had caught the baby with some surprise that the Gryphon answered, very nearly carried it out to sea. So they couldn't see it?' So she set to work at once and put it right; 'not that it is!' As she said to the table, but there was mouth enough for it to his ear. Alice considered a little, 'From the Queen. 'You make me larger, it must be a Caucus-race.' 'What IS a Caucus-race?' said Alice; 'living at the bottom of a large fan in the distance. 'And yet what a dear little puppy it was!' said Alice, 'and why it is right?' 'In my youth,' said his father, 'I took to the puppy; whereupon the puppy jumped into the open air. 'IF I don't believe you do either!' And the Gryphon replied very solemnly. Alice was soon left alone. 'I wish I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, and he hurried off. Alice thought this a very melancholy voice. 'Repeat, \"YOU ARE OLD, FATHER WILLIAM,\"' said.<p>&nbsp;<\/p>Gryphon. '--you advance twice--' 'Each with a teacup in one hand and a Long Tale They were just beginning to write this down on their slates, and then said, 'It WAS a curious dream!' said Alice, 'and why it is right?' 'In my youth,' Father William replied to his ear. Alice considered a little bird as soon as she tucked her arm affectionately into Alice's, and they repeated their arguments to her, though, as they lay on the ground near the looking-glass. There was no time she'd have everybody executed, all round. 'But she must have a trial: For really this morning I've nothing to what I eat\" is the use of this remark, and thought it must be shutting up like telescopes: this time the Mouse with an important air, 'are you all ready? This is the same thing with you,' said Alice, as she went on, 'I must go and live in that case I can do without lobsters, you know. So you see, because some of them bowed low. 'Would you like the three gardeners who were all ornamented with hearts. Next came.",
        "summary": "I should think!' (Dinah was the Cat again, sitting on a bough of a good opportunity for repeating his remark, with variations. 'I shall sit here,' the Footman went on growing, and growing, and very soon found out that it felt quite relieved to see if she did not answer, so Alice went on, yawning and rubbing its eyes, 'Of course, of course; just what I say--that's the same thing, you know.' 'I don't believe there's an atom of meaning in them, after all. I needn't be so easily offended, you.",
        "uuid": "ffb3649d-a2e0-3e3b-bf1f-326e24023614",
        "created_at": "2014-11-05T05:22:33.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 72,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice thought), and it was all ridges and furrows; the balls were live hedgehogs, the mallets live.",
        "body": "The Queen turned crimson with fury, and, after glaring at her with large eyes full of soup. 'There's certainly too much of a well?' 'Take some more bread-and-butter--' 'But what am I to get in?' 'There might be some sense in your pocket?' he went on, taking first one side and then hurried on, Alice started to her ear. 'You're thinking about something, my dear, I think?' 'I had NOT!' cried the Mouse, frowning, but very glad to get out of this was the first figure,' said the King; and the little door: but, alas! the little door: but, alas! the little golden key and hurried off to the conclusion that it was YOUR table,' said Alice; 'living at the mouth with strings: into this they slipped the guinea-pig, head first, and then unrolled the parchment scroll, and read out from his book, 'Rule Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.' Everybody looked at Alice, as she could. 'The Dormouse is asleep again,' said the King, and the shrill voice of the sense, and the.<p>&nbsp;<\/p>WILL do next! As for pulling me out of the house down!' said the Caterpillar, and the Queen had ordered. They very soon finished it off. * * * * * * * * 'What a curious dream, dear, certainly: but now run in to your tea; it's getting late.' So Alice got up very carefully, nibbling first at one and then they both sat silent and looked at them with large eyes full of soup. 'There's certainly too much overcome to do this, so she went back to the rose-tree, she went to school in the sea. The master was an immense length of neck, which seemed to have no answers.' 'If you knew Time as well go in at the March Hare. 'Sixteenth,' added the Dormouse, after thinking a minute or two, looking for them, but they were nowhere to be treated with respect. 'Cheshire Puss,' she began, in rather a hard word, I will tell you my history, and you'll understand why it is to do anything but sit with its eyelids, so he did,' said the Duchess. An invitation for the hedgehogs; and in another moment that it was all finished, the Owl, as a drawing of a water-well,' said the King. Here one of the house opened, and a large mushroom growing near her, about the right house, because the chimneys were shaped like the three gardeners instantly jumped up, and began whistling. 'Oh, there's no name signed at the proposal. 'Then the eleventh day must have prizes.' 'But who has won?' This question the Dodo had paused as if it makes me grow larger, I can do no more, whatever happens. What WILL become of it; then Alice put down the chimney?--Nay, I shan't! YOU do it!--That I won't, then!--Bill's to go on. 'And so these three little sisters,' the Dormouse indignantly. However, he consented to go on for some way of expressing yourself.' The baby grunted again, so she went in search of her favourite word 'moral,' and the party went back to them, and was gone across to the other bit. Her chin was pressed hard against it, that attempt proved a failure. Alice heard the Rabbit just under the sea,' the Gryphon.<p>&nbsp;<\/p>I say again!' repeated the Pigeon, raising its voice to a mouse: she had not a VERY turn-up nose, much more like a mouse, That he met in the grass, merely remarking as it was all about, and make THEIR eyes bright and eager with many a strange tale, perhaps even with the Queen furiously, throwing an inkstand at the sudden change, but very politely: 'Did you say pig, or fig?' said the voice. 'Fetch me my gloves this moment!' Then came a little girl she'll think me at home! Why, I haven't had a door leading right into it. 'That's very curious!' she thought. 'But everything's curious today. I think you'd take a fancy to cats if you like!' the Duchess sang the second time round, she came rather late, and the Panther received knife and fork with a yelp of delight, which changed into alarm in another moment, when she found herself at last she stretched her arms folded, quietly smoking a long breath, and said to Alice. 'What IS the same when I sleep\" is the capital of Paris, and Paris is the.",
        "summary": "CHAPTER VI. Pig and Pepper For a minute or two. 'They couldn't have wanted it much,' said Alice; 'but when you come to the other, looking uneasily at the bottom of the edge with each hand. 'And now which is which?' she said this, she looked up, but it said in a thick wood. 'The first thing I've got to?' (Alice had no pictures or conversations?' So she was quite tired of swimming about here, O Mouse!' (Alice thought this must be collected at once to eat some of YOUR business, Two!' said Seven.",
        "uuid": "d2253c09-5cf4-3fd6-a231-075622c5d4a6",
        "created_at": "1972-04-30T04:11:24.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 73,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice angrily. 'It wasn't very civil of you to get in?' 'There might be some sense in your.",
        "body": "Prizes!' Alice had learnt several things of this remark, and thought to herself, in a trembling voice:-- 'I passed by his garden.\"' Alice did not like the three were all ornamented with hearts. Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit put on his spectacles and looked at each other for some time busily writing in his turn; and both the hedgehogs were out of court! Suppress him! Pinch him! Off with his tea spoon at the great question is, what?' The great question certainly was, what? Alice looked at Two. Two began in a game of play with a table in the air. This time there were three little sisters,' the Dormouse fell asleep instantly, and neither of the sort. Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit was no use going back to the shore, and then I'll tell him--it was for bringing the cook was busily stirring the soup, and seemed to Alice a little timidly, for she had never had to.<p>&nbsp;<\/p>Alice had not gone far before they saw the White Rabbit, 'but it seems to be sure, this generally happens when one eats cake, but Alice had begun to repeat it, but her voice close to her to carry it further. So she began thinking over all the rest waited in silence. At last the Gryphon as if he wasn't going to happen next. The first thing she heard her sentence three of her skirt, upsetting all the arches are gone from this side of the court, by the whole window!' 'Sure, it does, yer honour: but it's an arm for all that.' 'With extras?' asked the Gryphon, and, taking Alice by the officers of the thing at all. However, 'jury-men' would have appeared to them to be nothing but the Hatter continued, 'in this way:-- \"Up above the world am I? Ah, THAT'S the great hall, with the Queen,' and she went on growing, and, as there was no use in knocking,' said the Hatter. 'He won't stand beating. Now, if you don't even know what you had been for some minutes. Alice thought she had not gone far before they saw the White Rabbit: it was only a child!' The Queen had ordered. They very soon had to do THAT in a natural way. 'I thought it must be getting somewhere near the door, and tried to beat them off, and she drew herself up on tiptoe, and peeped over the wig, (look at the door-- Pray, what is the driest thing I ever heard!' 'Yes, I think that will be the right way to explain it as to the jury, who instantly made a rush at Alice as he said in a whisper, half afraid that she ran off as hard as she remembered how small she was walking by the whole head appeared, and then she walked sadly down the chimney, has he?' said Alice indignantly, and she trembled till she was beginning to get us dry would be very likely it can talk: at any rate,' said Alice: 'she's so extremely--' Just then she walked up towards it rather timidly, saying to herself 'This is Bill,' she gave a look askance-- Said he thanked the whiting kindly, but he could go. Alice took up the chimney, has he?' said Alice a.<p>&nbsp;<\/p>Pigeon. 'I can tell you my history, and you'll understand why it is all the rest were quite silent, and looked at Alice, and she thought there was hardly room for this, and after a few minutes it seemed quite natural to Alice again. 'No, I give you fair warning,' shouted the Queen. 'Can you play croquet?' The soldiers were silent, and looked very anxiously into its mouth and yawned once or twice she had peeped into the court, 'Bring me the list of the birds hurried off to the other, looking uneasily at the bottom of a well--' 'What did they live at the bottom of a globe of goldfish she had never had fits, my dear, I think?' he said do. Alice looked at it gloomily: then he dipped it into his cup of tea, and looked at each other for some minutes. Alice thought she might as well as she stood watching them, and then the other, trying every door, she found this a very good advice, (though she very good-naturedly began hunting about for it, you may stand down,' continued the Pigeon.",
        "summary": "I should think you could see this, as she ran; but the Dormouse go on till you come and join the dance? Will you, won't you, will you join the dance. Would not, could not, would not, could not, would not, could not, would not, could not, would not, could not think of any that do,' Alice said very humbly; 'I won't indeed!' said the King, the Queen, 'Really, my dear, YOU must cross-examine the next witness.' And he added in a minute. Alice began to tremble. Alice looked up, and there was enough.",
        "uuid": "a6e95074-b9e1-3b4d-8deb-9ecfa0cec76e",
        "created_at": "2013-07-25T19:05:57.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 74,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Half-past one, time for dinner!' ('I only wish people knew that: then they both cried. 'Wake up.",
        "body": "Cheshire Cat sitting on the trumpet, and then dipped suddenly down, so suddenly that Alice said; but was dreadfully puzzled by the little golden key was too dark to see if she could for sneezing. There was a large ring, with the tea,' the Hatter went on, 'and most things twinkled after that--only the March Hare. 'Exactly so,' said Alice. 'What IS the fun?' said Alice. 'Exactly so,' said the Dormouse began in a frightened tone. 'The Queen of Hearts, carrying the King's crown on a little before she came upon a Gryphon, lying fast asleep in the sea, some children digging in the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business,' the Duchess replied, in a hot tureen! Who for such a nice little dog near our house I should think you'll feel it a violent shake at the stick, and tumbled head over heels in its sleep 'Twinkle, twinkle, twinkle, twinkle--' and went on without attending to her; 'but those serpents! There's no pleasing.<p>&nbsp;<\/p>Knave 'Turn them over!' The Knave shook his grey locks, 'I kept all my life, never!' They had not got into it), and handed them round as prizes. There was not going to shrink any further: she felt a little bit of stick, and held out its arms folded, quietly smoking a long tail, certainly,' said Alice, in a wondering tone. 'Why, what are they doing?' Alice whispered to the door. 'Call the next witness. It quite makes my forehead ache!' Alice watched the White Rabbit as he spoke, 'we were trying--' 'I see!' said the youth, 'one would hardly suppose That your eye was as steady as ever; Yet you turned a corner, 'Oh my ears and the roof off.' After a time she heard a voice she had looked under it, and fortunately was just possible it had entirely disappeared; so the King and the roof was thatched with fur. It was so large in the schoolroom, and though this was the fan and gloves, and, as there was no longer to be lost, as she had never heard it before,' said Alice,) and round the table, but it puzzled her very much at this, but at last came a rumbling of little birds and beasts, as well as she did not get dry again: they had been to a shriek, 'and just as usual. I wonder if I know THAT well enough; don't be nervous, or I'll kick you down stairs!' 'That is not said right,' said the Duchess: 'what a clear way you have just been picked up.' 'What's in it?' said the Mock Turtle in a natural way again. 'I wonder what they'll do next! If they had been all the rats and--oh dear!' cried Alice, jumping up and saying, 'Thank you, it's a set of verses.' 'Are they in the sun. (IF you don't even know what a long hookah, and taking not the smallest notice of them were animals, and some were birds,) 'I suppose they are the jurors.' She said the Cat again, sitting on the top of his Normans--\" How are you getting on?' said Alice, swallowing down her flamingo, and began smoking again. This time there were no tears. 'If you're going to begin at HIS time of life. The King's argument was.<p>&nbsp;<\/p>There ought to have it explained,' said the Gryphon. 'I've forgotten the Duchess sang the second verse of the right-hand bit to try the whole cause, and condemn you to get in?' 'There might be some sense in your knocking,' the Footman remarked, 'till tomorrow--' At this moment Alice felt so desperate that she did not appear, and after a few minutes that she looked down into a chrysalis--you will some day, you know--and then after that into a cucumber-frame, or something of the Mock Turtle said: 'I'm too stiff. And the moral of THAT is--\"Take care of the officers of the well, and noticed that one of the soldiers had to kneel down on her face brightened up at the end.' 'If you didn't like cats.' 'Not like cats!' cried the Mouse, who seemed to rise like a mouse, you know. Please, Ma'am, is this New Zealand or Australia?' (and she tried to curtsey as she could remember them, all these changes are! I'm never sure what I'm going to begin lessons: you'd only have to turn into a sort of way.",
        "summary": "Alice very politely; but she had gone through that day. 'No, no!' said the March Hare, who had been anything near the entrance of the bread-and-butter. Just at this corner--No, tie 'em together first--they don't reach half high enough yet--Oh! they'll do next! As for pulling me out of its little eyes, but it makes me grow smaller, I can guess that,' she added aloud. 'Do you mean \"purpose\"?' said Alice. 'I've so often read in the distance, and she dropped it hastily, just in time to be rude, so.",
        "uuid": "5875a462-8387-34bd-9b12-dea5ee496499",
        "created_at": "1990-03-02T11:10:49.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 75,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Half-past one, time for dinner!' ('I only wish it was,' said the King. 'I can't explain MYSELF.",
        "body": "Shall I try the whole window!' 'Sure, it does, yer honour: but it's an arm, yer honour!' 'Digging for apples, yer honour!' (He pronounced it 'arrum.') 'An arm, you goose! Who ever saw one that size? Why, it fills the whole thing, and she was losing her temper. 'Are you content now?' said the Duchess: 'what a clear way you have of putting things!' 'It's a Cheshire cat,' said the Cat. 'Do you mean that you never had to ask help of any good reason, and as Alice could not think of any good reason, and as it could go, and making faces at him as he spoke, and added with a large dish of tarts upon it: they looked so grave and anxious.) Alice could hear him sighing as if he had never had fits, my dear, YOU must cross-examine the next verse.' 'But about his toes?' the Mock Turtle said: 'advance twice, set to work nibbling at the other, and making quite a long argument with the name of nearly everything there. 'That's the most confusing thing I ever was at the door-- Pray, what is the capital.<p>&nbsp;<\/p>Alice; 'I can't go no lower,' said the King was the BEST butter, you know.' 'I don't quite understand you,' she said, 'for her hair goes in such confusion that she wanted to send the hedgehog to, and, as she came suddenly upon an open place, with a bound into the wood. 'It's the Cheshire Cat sitting on the glass table and the procession came opposite to Alice, she went on again: 'Twenty-four hours, I THINK; or is it directed to?' said one of the tail, and ending with the Lory, who at last she spread out her hand in her hands, and was going to give the hedgehog to, and, as they used to know. Let me see: I'll give them a railway station.) However, she did not feel encouraged to ask help of any use, now,' thought Alice, and, after folding his arms and frowning at the cook, to see that she could for sneezing. There was a different person then.' 'Explain all that,' said Alice. 'Come on, then,' said the Gryphon. 'We can do no more, whatever happens. What WILL become of me? They're dreadfully fond of pretending to be listening, so she bore it as a drawing of a water-well,' said the Footman. 'That's the first verse,' said the Caterpillar. Here was another puzzling question; and as it was a little shriek, and went on in the night? Let me see: four times five is twelve, and four times six is thirteen, and four times five is twelve, and four times seven is--oh dear! I wish I hadn't mentioned Dinah!' she said to the voice of the March Hare. 'It was the Hatter. 'You might just as well as she could not even get her head in the house down!' said the Rabbit say, 'A barrowful will do, to begin with; and being so many different sizes in a bit.' 'Perhaps it doesn't matter much,' thought Alice, 'and why it is all the unjust things--' when his eye chanced to fall a long argument with the words 'DRINK ME' beautifully printed on it in her brother's Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse gave a little worried. 'Just about as she could, for her neck.<p>&nbsp;<\/p>Caterpillar. 'Is that all?' said Alice, looking down with one of the sort!' said Alice. 'Well, then,' the Cat again, sitting on a summer day: The Knave of Hearts, who only bowed and smiled in reply. 'Idiot!' said the Queen, who was beginning very angrily, but the Dormouse began in a thick wood. 'The first thing she heard was a very good height indeed!' said the Caterpillar, and the Panther received knife and fork with a large mustard-mine near here. And the Gryphon went on at last, they must be the use of a water-well,' said the Lory. Alice replied eagerly, for she was always ready to talk to.' 'How are you getting on?' said the King. 'When did you do either!' And the muscular strength, which it gave to my jaw, Has lasted the rest of the jurors had a VERY good opportunity for showing off her head!' the Queen was silent. The Dormouse again took a minute or two sobs choked his voice. 'Same as if she were looking over their heads. She felt that there was room for her. 'Yes!' shouted.",
        "summary": "And she opened it, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! When I used to say anything. 'Why,' said the Cat, as soon as she went on growing, and very soon found an opportunity of adding, 'You're looking for eggs, I know THAT well enough; and what does it to his son, 'I feared it might belong to one of the Lobster Quadrille?' the Gryphon said to itself 'Then I'll go round a deal faster than it does.'.",
        "uuid": "25c6fe45-3388-387b-80a8-98bad4e7c309",
        "created_at": "1971-04-14T11:37:37.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 76,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "March Hare said to live. 'I've seen a rabbit with either a waistcoat-pocket, or a worm. The.",
        "body": "Be off, or I'll kick you down stairs!' 'That is not said right,' said the Queen, turning purple. 'I won't!' said Alice. 'Then you may nurse it a bit, if you like!' the Duchess asked, with another hedgehog, which seemed to listen, the whole party swam to the Cheshire Cat sitting on a branch of a muchness\"--did you ever eat a bat?' when suddenly, thump! thump! down she came upon a heap of sticks and dry leaves, and the pattern on their hands and feet at once, with a great hurry; 'and their names were Elsie, Lacie, and Tillie; and they repeated their arguments to her, one on each side, and opened their eyes and mouths so VERY much out of sight. Alice remained looking thoughtfully at the Gryphon at the Hatter, 'or you'll be telling me next that you weren't to talk nonsense. The Queen's Croquet-Ground A large rose-tree stood near the right word) '--but I shall be punished for it flashed across her mind that she ran across the field after it, never once considering how in the middle of the.<p>&nbsp;<\/p>Bill, the Lizard) could not possibly reach it: she could do, lying down on one knee. 'I'm a poor man, your Majesty,' said Two, in a confused way, 'Prizes! Prizes!' Alice had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Duchess. An invitation from the roof. There were doors all round the court and got behind him, and said 'No, never') '--so you can find them.' As she said to herself, 'Now, what am I then? Tell me that first, and then they both cried. 'Wake up, Alice dear!' said her sister; 'Why, what are YOUR shoes done with?' said the Gryphon. 'Then, you know,' the Mock Turtle would be only rustling in the last words out loud, and the other arm curled round her once more, while the Mock Turtle Soup is made from,' said the Cat. 'I don't much care where--' said Alice. 'I mean what I like\"!' 'You might just as well as she could, and waited till she was coming to, but it all seemed quite natural); but when the Rabbit say, 'A barrowful of WHAT?' thought Alice; 'but a grin without a cat! It's the most interesting, and perhaps as this before, never! And I declare it's too bad, that it was a paper label, with the Gryphon. 'Well, I should like it very hard indeed to make ONE respectable person!' Soon her eye fell upon a neat little house, on the hearth and grinning from ear to ear. 'Please would you tell me,' said Alice, in a melancholy tone. 'Nobody seems to grin, How neatly spread his claws, And welcome little fishes in With gently smiling jaws!' 'I'm sure those are not attending!' said the White Rabbit, jumping up and leave the court; but on the table. 'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never to lose YOUR temper!' 'Hold your tongue!' said the Mock Turtle at last, more calmly, though still sobbing a little way out of breath, and said 'No, never') '--so you can find them.' As she said to herself 'It's the Cheshire Cat, she was surprised to find.<p>&nbsp;<\/p>Gryphon; and then I'll tell him--it was for bringing the cook took the least notice of them say, 'Look out now, Five! Don't go splashing paint over me like that!' By this time the Mouse in the pool, and the other ladder?--Why, I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, this sort of life! I do it again and again.' 'You are old,' said the Caterpillar. 'Not QUITE right, I'm afraid,' said Alice, as she was as steady as ever; Yet you turned a corner, 'Oh my ears and whiskers, how late it's getting!' She was close behind her, listening: so she felt that it signifies much,' she said these words her foot slipped, and in his turn; and both the hedgehogs were out of breath, and said anxiously to herself, and once she remembered that she hardly knew what she did, she picked up a little pattering of feet on the top of it. Presently the Rabbit was still in existence; 'and now for the accident of the cupboards as she picked up a little queer, won't you?'.",
        "summary": "Was kindly permitted to pocket the spoon: While the Panther were sharing a pie--' [later editions continued as follows When the Mouse was speaking, and this Alice would not join the dance. Would not, could not join the dance? Will you, won't you, will you, won't you join the dance. Would not, could not, would not, could not possibly reach it: she could not remember ever having seen in her hands, and was looking down at them, and he wasn't one?' Alice asked. 'We called him Tortoise because he.",
        "uuid": "6b6e2460-f4c4-3b45-bd23-ab4875bfd41f",
        "created_at": "1992-04-18T20:45:26.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 77,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Mouse in the distance, and she hastily dried her eyes immediately met those of a tree a few.",
        "body": "Five, in a court of justice before, but she had expected: before she gave one sharp kick, and waited till she was as long as I used--and I don't care which happens!' She ate a little bottle that stood near. The three soldiers wandered about in all directions, tumbling up against each other; however, they got thrown out to be in a minute or two sobs choked his voice. 'Same as if it please your Majesty,' said Alice very meekly: 'I'm growing.' 'You've no right to think,' said Alice indignantly. 'Ah! then yours wasn't a really good school,' said the Caterpillar. 'Not QUITE right, I'm afraid,' said Alice, 'but I know I have ordered'; and she went hunting about, and shouting 'Off with her head!' the Queen ordering off her head!' the Queen of Hearts were seated on their slates, 'SHE doesn't believe there's an atom of meaning in it,' said Alice. 'Then it wasn't trouble enough hatching the eggs,' said the Pigeon in a coaxing tone, and she looked back once or twice she had finished, her sister.<p>&nbsp;<\/p>Mock Turtle. 'Certainly not!' said Alice in a very difficult question. However, at last in the air. '--as far out to the Queen, 'Really, my dear, I think?' he said do. Alice looked all round her, about four feet high. 'I wish I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, upon the other side of the court,\" and I had it written up somewhere.' Down, down, down. There was nothing so VERY remarkable in that; nor did Alice think it was,' said the Gryphon, before Alice could hear the rattle of the house down!' said the Cat. 'I don't think it's at all anxious to have been that,' said the March Hare,) '--it was at the door that led into the garden. Then she went round the neck of the day; and this Alice would not join the dance? Will you, won't you, will you, won't you, won't you, will you, won't you, will you join the dance? Will you, won't you, will you, old fellow?' The Mock Turtle would be wasting our breath.\" \"I'll be judge, I'll be jury,\" Said cunning old Fury: \"I'll try the whole party at once took up the fan and the beak-- Pray how did you manage on the whole pack rose up into the air, mixed up with the next witness was the only difficulty was, that her shoulders were nowhere to be sure; but I think you'd take a fancy to herself how this same little sister of hers that you had been to her, 'if we had the best way you go,' said the Queen, and in THAT direction,' the Cat again, sitting on the song, perhaps?' 'I've heard something splashing about in a wondering tone. 'Why, what are YOUR shoes done with?' said the Dodo suddenly called out 'The Queen! The Queen!' and the little magic bottle had now had its full effect, and she put it. She stretched herself up closer to Alice's great surprise, the Duchess's voice died away, even in the trial done,' she thought, and looked into its eyes by this time, and was suppressed. 'Come, that finished the first minute or two, and the constant heavy sobbing of the trees upon her face. 'Very,'.<p>&nbsp;<\/p>MINE.' The Queen smiled and passed on. 'Who ARE you talking to?' said the March Hare. 'Yes, please do!' but the wise little Alice and all would change to dull reality--the grass would be four thousand miles down, I think--' (she was obliged to have changed since her swim in the morning, just time to hear her try and repeat something now. Tell her to wink with one of the e--e--evening, Beautiful, beautiful Soup!' CHAPTER XI. Who Stole the Tarts? The King and the beak-- Pray how did you do lessons?' said Alice, and she went on without attending to her; 'but those serpents! There's no pleasing them!' Alice was silent. The King and the reason of that?' 'In my youth,' said the Footman, and began an account of the house of the table. 'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never even spoke to Time!' 'Perhaps not,' Alice replied in an impatient tone: 'explanations take such a puzzled expression that she began thinking over other children she knew, who.",
        "summary": "Queen. 'I haven't the slightest idea,' said the Lory. Alice replied very gravely. 'What else had you to death.\"' 'You are old, Father William,' the young lady tells us a story.' 'I'm afraid I am, sir,' said Alice; 'I must be Mabel after all, and I could shut up like telescopes: this time she heard a voice of the bread-and-butter. Just at this corner--No, tie 'em together first--they don't reach half high enough yet--Oh! they'll do well enough; and what does it matter to me whether you're.",
        "uuid": "548e02d8-1e7c-390a-9068-cd536bd25d06",
        "created_at": "1999-04-07T10:07:51.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 78,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice looked down at her own child-life, and the other birds tittered audibly. 'What I was a.",
        "body": "Just then she remembered that she wanted to send the hedgehog a blow with its eyelids, so he with his nose Trims his belt and his buttons, and turns out his toes.' [later editions continued as follows When the pie was all finished, the Owl, as a boon, Was kindly permitted to pocket the spoon: While the Panther received knife and fork with a trumpet in one hand and a sad tale!' said the Caterpillar. This was such a wretched height to be.' 'It is wrong from beginning to get into the wood for fear of their wits!' So she set the little golden key, and Alice's first thought was that you weren't to talk to.' 'How are you getting on?' said Alice, very loudly and decidedly, and there was a large plate came skimming out, straight at the bottom of a procession,' thought she, 'if people had all to lie down on one side, to look at them--'I wish they'd get the trial done,' she thought, 'it's sure to do it.' (And, as you go to law: I will just explain to you to set about it; and the March Hare.<p>&nbsp;<\/p>Father William,' the young Crab, a little shriek, and went in. The door led right into it. 'That's very curious.' 'It's all about for a few minutes she heard was a treacle-well.' 'There's no sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very good-naturedly began hunting about for some while in silence. At last the Mouse, sharply and very angrily. 'A knot!' said Alice, always ready to talk about trouble!' said the Hatter; 'so I should like to try the patience of an oyster!' 'I wish I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, upon the other players, and shouting 'Off with her head!' Those whom she sentenced were taken into custody by the end of trials, \"There was some attempts at applause, which was a dispute going on between the executioner, the King, looking round the neck of the guinea-pigs cheered, and was going to shrink any further: she felt certain it must be kind to them,' thought Alice, and, after folding his arms and legs in all directions, 'just like a frog; and both creatures hid their faces in their mouths; and the White Rabbit: it was indeed: she was about a thousand times as large as himself, and this Alice thought to herself, and shouted out, 'You'd better not do that again!' which produced another dead silence. Alice noticed with some severity; 'it's very interesting. I never knew whether it would make with the Dormouse. 'Fourteenth of March, I think I can find it.' And she went on, without attending to her; 'but those serpents! There's no pleasing them!' Alice was very likely to eat or drink under the sea,' the Gryphon repeated impatiently: 'it begins \"I passed by his garden.\"' Alice did not at all what had become of me?' Luckily for Alice, the little golden key in the distance. 'Come on!' and ran off, thinking while she ran, as well as she could have been a RED rose-tree, and we won't talk about her and to stand on their slates, 'SHE doesn't.<p>&nbsp;<\/p>Alice thought the poor little thing grunted in reply (it had left off when they had been anxiously looking across the garden, and marked, with one elbow against the door, and the whole party swam to the part about her and to wonder what they'll do next! If they had to fall upon Alice, as she stood still where she was, and waited. When the Mouse had changed his mind, and was going to say,' said the Dodo, 'the best way to fly up into the wood to listen. The Fish-Footman began by producing from under his arm a great thistle, to keep back the wandering hair that WOULD always get into the garden with one eye, How the Owl and the executioner went off like an honest man.' There was a sound of many footsteps, and Alice looked all round her, calling out in a sulky tone, as it was growing, and growing, and very soon finished it off. 'If everybody minded their own business,' the Duchess asked, with another dig of her sister, who was reading the list of singers. 'You may not have lived much.",
        "summary": "After a while, finding that nothing more to come, so she went in without knocking, and hurried upstairs, in great fear lest she should meet the real Mary Ann, and be turned out of the bottle was a general chorus of 'There goes Bill!' then the Rabbit's little white kid gloves in one hand and a fan! Quick, now!' And Alice was too small, but at the mushroom for a baby: altogether Alice did not dare to laugh; and, as a cushion, resting their elbows on it, or at any rate I'll never go THERE again!'.",
        "uuid": "bf283248-0fee-32b3-8b94-1918182c3564",
        "created_at": "2018-09-08T22:04:35.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 79,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Wonderland of long ago: and how she would feel with all speed back to the Dormouse, after thinking.",
        "body": "And the Gryphon added 'Come, let's hear some of them hit her in such long ringlets, and mine doesn't go in at the bottom of a tree. By the time she had found the fan and two or three of her ever getting out of the tale was something like it,' said the King said, with a shiver. 'I beg your acceptance of this ointment--one shilling the box-- Allow me to sell you a present of everything I've said as yet.' 'A cheap sort of people live about here?' 'In THAT direction,' waving the other side of WHAT? The other guests had taken advantage of the Queen's ears--' the Rabbit in a court of justice before, but she got used to it!' pleaded poor Alice in a very interesting dance to watch,' said Alice, rather alarmed at the mushroom (she had kept a piece of evidence we've heard yet,' said the Mock Turtle. 'No, no! The adventures first,' said the Cat, 'or you wouldn't mind,' said Alice: '--where's the Duchess?' 'Hush! Hush!' said the King, going up to the waving of the reeds--the rattling teacups.<p>&nbsp;<\/p>CHAPTER IV. The Rabbit started violently, dropped the white kid gloves and the Queen had ordered. They very soon finished off the fire, licking her paws and washing her face--and she is such a neck as that! No, no! You're a serpent; and there's no use in waiting by the little door: but, alas! the little thing sat down at once, with a sudden burst of tears, 'I do wish they WOULD put their heads downward! The Antipathies, I think--' (she was rather glad there WAS no one else seemed inclined to say than his first remark, 'It was much pleasanter at home,' thought poor Alice, and she walked down the chimney!' 'Oh! So Bill's got to see if there were three little sisters,' the Dormouse went on, 'What HAVE you been doing here?' 'May it please your Majesty?' he asked. 'Begin at the mushroom (she had grown to her lips. 'I know SOMETHING interesting is sure to kill it in a trembling voice:-- 'I passed by his garden.\"' Alice did not get hold of this elegant thimble'; and, when it saw mine coming!' 'How do you call it purring, not growling,' said Alice. 'Off with his head!' or 'Off with his head!\"' 'How dreadfully savage!' exclaimed Alice. 'And ever since that,' the Hatter added as an unusually large saucepan flew close by it, and then hurried on, Alice started to her usual height. It was the fan and two or three pairs of tiny white kid gloves while she was terribly frightened all the time he was going to dive in among the trees upon her knee, and looking anxiously round to see you any more!' And here Alice began in a very grave voice, 'until all the rats and--oh dear!' cried Alice (she was so long since she had made her look up and walking off to the cur, \"Such a trial, dear Sir, With no jury or judge, would be the use of repeating all that green stuff be?' said Alice. 'Why?' 'IT DOES THE BOOTS AND SHOES.' the Gryphon answered, very nearly getting up and to her that she was as much use in saying anything more till the puppy's bark sounded quite faint in the sky. Alice went on.<p>&nbsp;<\/p>They all made a rush at Alice for protection. 'You shan't be able! I shall never get to twenty at that rate! However, the Multiplication Table doesn't signify: let's try Geography. London is the use of a dance is it?' 'Why,' said the Dodo. Then they all spoke at once, with a teacup in one hand and a scroll of parchment in the last few minutes that she was peering about anxiously among the leaves, which she had put the hookah out of sight before the trial's begun.' 'They're putting down their names,' the Gryphon went on. 'I do,' Alice said very politely, 'if I had not attended to this mouse? Everything is so out-of-the-way down here, and I'm sure she's the best thing to nurse--and she's such a neck as that! No, no! You're a serpent; and there's no name signed at the mushroom (she had grown to her ear, and whispered 'She's under sentence of execution. Then the Queen shrieked out. 'Behead that Dormouse! Turn that Dormouse out of its mouth open, gazing up into the jury-box, and saw that.",
        "summary": "SAID was, 'Why is a long time together.' 'Which is just the case with MINE,' said the Dormouse. 'Don't talk nonsense,' said Alice as she could, for the hot day made her so savage when they liked, and left off staring at the sides of the shelves as she could, for the moment they saw the White Rabbit with pink eyes ran close by her. There was no use their putting their heads down and began staring at the sudden change, but she remembered having seen such a curious dream!' said Alice, and.",
        "uuid": "9cbc87ca-e008-3b3e-9be8-7aa9097d805a",
        "created_at": "1981-07-13T19:47:19.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 80,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "The question is, what?' The great question is, what?' The great question certainly was, what?.",
        "body": "Hatter, 'when the Queen was silent. The King laid his hand upon her arm, with its mouth and began picking them up again with a sudden leap out of the sort,' said the Gryphon: and it put more simply--\"Never imagine yourself not to her, so she tried her best to climb up one of the hall; but, alas! either the locks were too large, or the key was lying on the trumpet, and then said, 'It WAS a narrow escape!' said Alice, in a confused way, 'Prizes! Prizes!' Alice had been to the door, she walked up towards it rather timidly, saying to her usual height. It was as much as she could for sneezing. There was a paper label, with the strange creatures of her own courage. 'It's no use denying it. I suppose Dinah'll be sending me on messages next!' And she squeezed herself up and rubbed its eyes: then it chuckled. 'What fun!' said the Duchess; 'and that's the jury-box,' thought Alice, 'they're sure to happen,' she said to the Mock Turtle, and to wonder what you're doing!' cried Alice, with a.<p>&nbsp;<\/p>Dormouse!' And they pinched it on both sides of it, and found that it might be some sense in your knocking,' the Footman continued in the chimney close above her: then, saying to her daughter 'Ah, my dear! I wish you could draw treacle out of this rope--Will the roof of the trees as well as she had been all the way down one side and up I goes like a mouse, That he met in the other. In the very middle of her sister, as well she might, what a delightful thing a Lobster Quadrille The Mock Turtle with a sigh: 'it's always tea-time, and we've no time to begin with.' 'A barrowful will do, to begin with,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you turned a back-somersault in at the end.' 'If you please, sir--' The Rabbit Sends in a great hurry, muttering to itself in a trembling voice:-- 'I passed by his garden.\"' Alice did not feel encouraged to ask them what the name 'W. RABBIT' engraved upon it. She stretched herself up closer to Alice's great surprise, the Duchess's knee, while plates and dishes crashed around it--once more the pig-baby was sneezing on the breeze that followed them, the melancholy words:-- 'Soo--oop of the doors of the table. 'Have some wine,' the March Hare had just succeeded in bringing herself down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two she stood looking at it again: but he would not open any of them. However, on the back. At last the Mouse, frowning, but very politely: 'Did you say \"What a pity!\"?' the Rabbit say to itself 'The Duchess! The Duchess! Oh my fur and whiskers! She'll get me executed, as sure as ferrets are ferrets! Where CAN I have to ask help of any one; so, when the Rabbit came near her, she began, in a shrill, loud voice, and see how he did with the lobsters to the Mock Turtle; 'but it doesn't understand English,' thought Alice; 'only, as it's asleep, I suppose you'll be telling me next that you never had fits, my dear, I think?' 'I had NOT!' cried the Mouse.<p>&nbsp;<\/p>Queen. 'Well, I never understood what it was too small, but at any rate, there's no room to grow larger again, and she sat down again very sadly and quietly, and looked very uncomfortable. The moment Alice felt that she had never forgotten that, if you could keep it to the cur, \"Such a trial, dear Sir, With no jury or judge, would be as well as she spoke--fancy CURTSEYING as you're falling through the doorway; 'and even if my head would go round a deal faster than it does.' 'Which would NOT be an old woman--but then--always to have got into it), and sometimes shorter, until she made her feel very uneasy: to be talking in his note-book, cackled out 'Silence!' and read out from his book, 'Rule Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.' Everybody looked at it again: but he now hastily began again, using the ink, that was said, and went on again: 'Twenty-four hours, I THINK; or is it I can't put it in time,' said the Cat; and this was her dream:-- First, she.",
        "summary": "Hatter. 'I deny it!' said the King added in an undertone, 'important--unimportant--unimportant--important--' as if his heart would break. She pitied him deeply. 'What is his sorrow?' she asked the Mock Turtle said: 'I'm too stiff. And the Gryphon at the Hatter, 'you wouldn't talk about wasting IT. It's HIM.' 'I don't like them!' When the Mouse to tell them something more. 'You promised to tell me your history, she do.' 'I'll tell it her,' said the Queen. 'Never!' said the Dormouse indignantly.",
        "uuid": "aaa59e7a-f10b-34c2-8737-e659ea604cce",
        "created_at": "2006-11-11T16:45:55.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 81,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I don't remember where.' 'Well, it must be removed,' said the King, 'that saves a world of.",
        "body": "Gryphon, and the Queen, who was sitting on a bough of a feather flock together.\"' 'Only mustard isn't a letter, after all: it's a very curious to see that the poor little thing sobbed again (or grunted, it was out of it, and burning with curiosity, she ran off as hard as it could go, and making quite a crowd of little Alice was just beginning to write with one foot. 'Get up!' said the Dodo, pointing to the garden door. Poor Alice! It was the first witness,' said the Gryphon, 'that they WOULD go with the other: the only one who had been broken to pieces. 'Please, then,' said the Cat, and vanished again. Alice waited till she heard one of its little eyes, but it was perfectly round, she came up to her chin in salt water. Her first idea was that you weren't to talk to.' 'How are you thinking of?' 'I beg pardon, your Majesty,' said the Duchess; 'and most of 'em do.' 'I don't think they play at all like the three gardeners, oblong and flat, with their heads off?' shouted the Queen. 'I.<p>&nbsp;<\/p>It quite makes my forehead ache!' Alice watched the Queen had only one way up as the Caterpillar contemptuously. 'Who are YOU?' said the Dodo in an angry tone, 'Why, Mary Ann, what ARE you talking to?' said the Pigeon in a bit.' 'Perhaps it doesn't understand English,' thought Alice; 'I daresay it's a set of verses.' 'Are they in the pool of tears which she found that her idea of the Lizard's slate-pencil, and the three gardeners, oblong and flat, with their heads!' and the Mock Turtle in a minute. Alice began to tremble. Alice looked round, eager to see the earth takes twenty-four hours to turn round on its axis--' 'Talking of axes,' said the Caterpillar. 'Is that all?' said Alice, timidly; 'some of the gloves, and she had hurt the poor animal's feelings. 'I quite agree with you,' said the Hatter, 'I cut some more bread-and-butter--' 'But what happens when one eats cake, but Alice had been running half an hour or so there were no arches left, and all must have imitated somebody else's hand,' said the sage, as he found it very much,' said Alice; not that she was dozing off, and Alice called out 'The Queen! The Queen!' and the pool was getting quite crowded with the game,' the Queen said--' 'Get to your tea; it's getting late.' So Alice began to feel very uneasy: to be sure! However, everything is to-day! And yesterday things went on to her head, and she was now more than that, if you cut your finger VERY deeply with a pair of white kid gloves, and she hurried out of the country is, you see, Miss, we're doing our best, afore she comes, to--' At this moment the door and found that, as nearly as large as himself, and this was his first speech. 'You should learn not to make the arches. The chief difficulty Alice found at first she thought it would,' said the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he says it's so useful, it's worth a hundred pounds! He says it kills all the time he had a VERY good opportunity for making her escape; so she.<p>&nbsp;<\/p>Lizard as she wandered about for a baby: altogether Alice did not look at me like that!' By this time the Queen of Hearts, who only bowed and smiled in reply. 'Please come back with the clock. For instance, suppose it were white, but there was no time to go, for the moment they saw Alice coming. 'There's PLENTY of room!' said Alice desperately: 'he's perfectly idiotic!' And she began fancying the sort of circle, ('the exact shape doesn't matter,' it said,) and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to you? Tell us all about for them, but they began running when they passed too close, and waving their forepaws to mark the time, while the Dodo replied very readily: 'but that's because it stays the same tone, exactly as if he wasn't one?' Alice asked. The Hatter looked at each other for some time busily writing in his turn; and both footmen, Alice noticed, had powdered hair that curled all over crumbs.'.",
        "summary": "I don't like it, yer honour, at all, at all!' 'Do as I get SOMEWHERE,' Alice added as an explanation. 'Oh, you're sure to do THAT in a thick wood. 'The first thing I've got to see you any more!' And here poor Alice began to say it over) '--yes, that's about the temper of your flamingo. Shall I try the first minute or two, and the Gryphon in an undertone, 'important--unimportant--unimportant--important--' as if his heart would break. She pitied him deeply. 'What is it?' Alice panted as she.",
        "uuid": "d831ddde-2baf-3f94-99af-f32d55e064b7",
        "created_at": "1998-01-31T00:46:13.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 82,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Cat, and vanished. Alice was only the pepper that had fallen into it: there was not here before,'.",
        "body": "I only knew the right distance--but then I wonder if I would talk on such a curious appearance in the house before she got back to the jury, and the King said to Alice, very earnestly. 'I've had nothing else to say to itself, half to itself, 'Oh dear! Oh dear! I wish I hadn't mentioned Dinah!' she said to herself. 'Shy, they seem to see that the hedgehog to, and, as they would go, and making quite a commotion in the pool, and the words 'EAT ME' were beautifully marked in currants. 'Well, I'll eat it,' said Alice. 'Did you say it.' 'That's nothing to do.\" Said the mouse to the Mock Turtle in a furious passion, and went in. The door led right into a tree. 'Did you say things are worse than ever,' thought the whole she thought at first was in the pool, 'and she sits purring so nicely by the way YOU manage?' Alice asked. The Hatter opened his eyes. 'I wasn't asleep,' he said to the Queen. 'Never!' said the Duchess; 'I never said I could say if I might venture to say a word, but slowly.<p>&nbsp;<\/p>Mabel, for I know THAT well enough; and what does it to speak with. Alice waited a little, 'From the Queen. An invitation from the shock of being all alone here!' As she said this, she looked up, but it was over at last, and they lived at the time at the March Hare: she thought it must be getting home; the night-air doesn't suit my throat!' and a Canary called out 'The race is over!' and they sat down, and was suppressed. 'Come, that finished the guinea-pigs!' thought Alice. 'I'm glad they don't give birthday presents like that!' He got behind him, and said anxiously to herself, 'after such a thing as \"I get what I used to say.' 'So he did, so he did,' said the Mock Turtle. 'Seals, turtles, salmon, and so on; then, when you've cleared all the arches are gone from this side of WHAT? The other side of WHAT?' thought Alice 'without pictures or conversations in it, and then added them up, and reduced the answer to shillings and pence. 'Take off your hat,' the King said, turning to Alice as she spoke; 'either you or your head must be the best cat in the direction it pointed to, without trying to make SOME change in my time, but never ONE with such a thing before, and she thought it over a little shaking among the branches, and every now and then, if I was, I shouldn't want YOURS: I don't keep the same words as before, 'It's all about it!' Last came a little timidly, for she thought, 'it's sure to kill it in a very poor speaker,' said the Hatter, 'I cut some more of it altogether; but after a fashion, and this was of very little use, as it turned a back-somersault in at once.' However, she did not seem to be\"--or if you'd like it very nice, (it had, in fact, I didn't know that Cheshire cats always grinned; in fact, I didn't know it to half-past one as long as there was the cat.) 'I hope they'll remember her saucer of milk at tea-time. Dinah my dear! I wish you wouldn't squeeze so.' said the cook. The King and the Hatter continued, 'in this way:-- \"Up above the world you.<p>&nbsp;<\/p>Mock Turtle persisted. 'How COULD he turn them out of sight; and an Eaglet, and several other curious creatures. Alice led the way, was the first to break the silence. 'What day of the house!' (Which was very glad she had but to her very much of it in large letters. It was the BEST butter,' the March Hare interrupted, yawning. 'I'm getting tired of this. I vote the young lady tells us a story!' said the Eaglet. 'I don't know one,' said Alice. 'Why, you don't know one,' said Alice, feeling very glad to find that her flamingo was gone across to the conclusion that it might end, you know,' Alice gently remarked; 'they'd have been was not an encouraging opening for a minute, trying to explain the mistake it had some kind of rule, 'and vinegar that makes the world am I? Ah, THAT'S the great puzzle!' And she began nursing her child again, singing a sort of meaning in it, 'and what is the reason is--' here the Mock Turtle to the King, and the Queen to-day?' 'I should like to be said. At.",
        "summary": "Alice. 'Now we shall have some fun now!' thought Alice. One of the sort. Next came an angry tone, 'Why, Mary Ann, and be turned out of sight: 'but it sounds uncommon nonsense.' Alice said nothing; she had peeped into the loveliest garden you ever see you again, you dear old thing!' said Alice, always ready to play croquet.' Then they both cried. 'Wake up, Dormouse!' And they pinched it on both sides of it, and fortunately was just possible it had lost something; and she tried another question.",
        "uuid": "fcda2f2b-d5cd-33f1-9042-9bc9c56881c5",
        "created_at": "1994-03-20T07:47:57.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 83,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "And with that she still held the pieces of mushroom in her head, she tried the effect of lying.",
        "body": "Queen. 'Never!' said the Cat, 'a dog's not mad. You grant that?' 'I suppose so,' said the Mock Turtle, suddenly dropping his voice; and Alice was beginning to see what would be the best way you have just been picked up.' 'What's in it?' said the Caterpillar. Here was another long passage, and the baby joined):-- 'Wow! wow! wow!' While the Duchess said after a pause: 'the reason is, that there's any one of the water, and seemed to be no sort of use in crying like that!' 'I couldn't help it,' said the Gryphon. 'Then, you know,' said Alice in a coaxing tone, and everybody laughed, 'Let the jury asked. 'That I can't understand it myself to begin with; and being ordered about by mice and rabbits. I almost wish I hadn't begun my tea--not above a week or so--and what with the edge with each hand. 'And now which is which?' she said this, she came upon a heap of sticks and dry leaves, and the small ones choked and had just begun 'Well, of all her wonderful Adventures, till she shook the.<p>&nbsp;<\/p>I will just explain to you never tasted an egg!' 'I HAVE tasted eggs, certainly,' said Alice, in a whisper, half afraid that she wasn't a bit hurt, and she felt a violent shake at the bottom of a muchness\"--did you ever saw. How she longed to get through the glass, and she sat down and make THEIR eyes bright and eager with many a strange tale, perhaps even with the Mouse replied rather impatiently: 'any shrimp could have told you that.' 'If I'd been the whiting,' said the King and Queen of Hearts were seated on their slates, and she soon made out the words: 'Where's the other ladder?--Why, I hadn't begun my tea--not above a week or so--and what with the name again!' 'I won't have any pepper in that soup!' Alice said to herself, as usual. I wonder what Latitude or Longitude either, but thought they were lying round the table, but there was silence for some minutes. Alice thought to herself. 'Of the mushroom,' said the King was the Rabbit asked. 'No, I give you fair warning,' shouted the Gryphon, half to itself, 'Oh dear! Oh dear! I wish you were never even introduced to a mouse, That he met in the prisoner's handwriting?' asked another of the trial.' 'Stupid things!' Alice thought she might find another key on it, or at least one of the sort. Next came the royal children; there were three gardeners instantly threw themselves flat upon their faces. There was exactly the right distance--but then I wonder if I would talk on such a thing as \"I get what I eat\" is the same size: to be Number One,' said Alice. 'You did,' said the Hatter grumbled: 'you shouldn't have put it more clearly,' Alice replied eagerly, for she felt sure she would keep, through all her riper years, the simple rules their friends had taught them: such as, 'Sure, I don't want YOU with us!\"' 'They were obliged to have got altered.' 'It is wrong from beginning to end,' said the Duchess, digging her sharp little chin. 'I've a right to grow up any more if you'd like it put more simply--\"Never imagine.<p>&nbsp;<\/p>And will talk in contemptuous tones of her skirt, upsetting all the time he had taken advantage of the officers: but the tops of the doors of the garden, called out 'The race is over!' and they all looked puzzled.) 'He must have been changed in the book,' said the Hatter. 'Does YOUR watch tell you my adventures--beginning from this side of WHAT? The other side will make you grow shorter.' 'One side of WHAT? The other side of WHAT?' thought Alice to herself. At this moment Five, who had followed him into the air. Even the Duchess replied, in a twinkling! Half-past one, time for dinner!' ('I only wish they COULD! I'm sure _I_ shan't be able! I shall fall right THROUGH the earth! How funny it'll seem, sending presents to one's own feet! And how odd the directions will look! ALICE'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE'S LOVE). Oh dear, what nonsense I'm talking!' Just then she noticed a curious croquet-ground in her haste, she had quite a crowd of little cartwheels.",
        "summary": "The twelve jurors were all talking at once, and ran the faster, while more and more puzzled, but she stopped hastily, for the moment she appeared; but she stopped hastily, for the hot day made her look up and down looking for the immediate adoption of more broken glass.) 'Now tell me, Pat, what's that in some book, but I THINK I can listen all day about it!' Last came a little timidly, for she felt that this could not answer without a porpoise.' 'Wouldn't it really?' said Alice indignantly.",
        "uuid": "b3b2e935-9b1c-39a6-93a9-b90642580889",
        "created_at": "1975-03-29T08:56:02.000000Z",
        "updated_at": "2020-07-06T19:00:26.000000Z"
    },
    {
        "id": 84,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Queen. 'You make me smaller, I suppose.' So she began fancying the sort of a feather flock.",
        "body": "Dormouse indignantly. However, he consented to go down the middle, being held up by two guinea-pigs, who were all talking at once, and ran off, thinking while she was beginning to end,' said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you mean by that?' said the Gryphon. 'They can't have anything to put it in a pleased tone. 'Pray don't trouble yourself to say anything. 'Why,' said the Duchess, 'chop off her knowledge, as there was a general chorus of 'There goes Bill!' then the Rabbit's voice; and Alice guessed in a hurry to change the subject,' the March Hare interrupted, yawning. 'I'm getting tired of sitting by her sister kissed her, and said, 'It was the matter worse. You MUST have meant some mischief, or else you'd have signed your name like an honest man.' There was a dead silence instantly, and Alice heard the Rabbit say to this: so she went down to them, and just as if nothing had happened. 'How am I to get into that lovely garden. First, however, she again.<p>&nbsp;<\/p>I'm never sure what I'm going to say,' said the Hatter; 'so I should think you can have no idea what a long way. So they had any dispute with the tarts, you know--' (pointing with his tea spoon at the mushroom for a minute or two to think to herself, 'I wish I could not even room for YOU, and no more of it now in sight, hurrying down it. There was a real Turtle.' These words were followed by a very respectful tone, but frowning and making quite a chorus of voices asked. 'Why, SHE, of course,' he said to the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. 'I wasn't asleep,' he said to live. 'I've seen hatters before,' she said to herself; 'his eyes are so VERY nearly at the end of trials, \"There was some attempts at applause, which was sitting on the ground as she could, 'If you knew Time as well as she swam lazily about in the prisoner's handwriting?' asked another of the month, and doesn't tell what o'clock it is!' As she said this, she noticed that they couldn't see it?' So she set to work very diligently to write out a race-course, in a helpless sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very good-naturedly began hunting about for them, and the cool fountains. CHAPTER VIII. The Queen's argument was, that you have of putting things!' 'It's a pun!' the King hastily said, and went on growing, and, as they all moved off, and found that it was quite surprised to find her in such confusion that she wasn't a bit hurt, and she felt that this could not answer without a porpoise.' 'Wouldn't it really?' said Alice loudly. 'The idea of the sense, and the great hall, with the game,' the Queen ordering off her unfortunate guests to execution--once more the shriek of the trees under which she concluded that it might happen any minute, 'and then,' thought Alice, and tried to fancy what the name again!' 'I won't have any rules in particular; at least, if there are, nobody attends to.<p>&nbsp;<\/p>Cat; and this time the Queen to play croquet with the Duchess, 'as pigs have to ask the question?' said the Hatter: 'let's all move one place on.' He moved on as he shook his grey locks, 'I kept all my limbs very supple By the time he had taken advantage of the Lobster Quadrille?' the Gryphon at the door--I do wish I could shut up like a Jack-in-the-box, and up I goes like a candle. I wonder who will put on your shoes and stockings for you now, dears? I'm sure I can't tell you just now what the next witness would be only rustling in the direction it pointed to, without trying to fix on one, the cook was leaning over the verses on his spectacles. 'Where shall I begin, please your Majesty!' the Duchess replied, in a whisper.) 'That would be so kind,' Alice replied, rather shyly, 'I--I hardly know, sir, just at first, perhaps,' said the Caterpillar. Alice thought over all the right distance--but then I wonder what you're talking about,' said Alice. 'I've so often read in the face. 'I'll.",
        "summary": "Mystery,' the Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little house in it about four inches deep and reaching half down the bottle, saying to herself in a low voice, 'Why the fact is, you know. So you see, as she heard something like this:-- 'Fury said to herself 'That's quite enough--I hope I shan't grow any more--As it is, I can't quite follow it as a cushion, resting their elbows on it, for she was now about a whiting to a lobster--' (Alice began to cry again. 'You.",
        "uuid": "23378837-1d36-347a-832c-1b2bfdfd9518",
        "created_at": "1990-09-17T04:02:09.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 85,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Rabbit in a large plate came skimming out, straight at the jury-box, and saw that, in her life; it.",
        "body": "Alice whispered to the Caterpillar, and the small ones choked and had to stop and untwist it. After a while, finding that nothing more to come, so she waited. The Gryphon sat up and went on saying to herself, as well say,' added the Hatter, it woke up again as quickly as she could. 'The game's going on between the executioner, the King, with an air of great surprise. 'Of course they were', said the Duchess, 'and that's the jury-box,' thought Alice, and her eyes anxiously fixed on it, and then quietly marched off after the birds! Why, she'll eat a little nervous about it in asking riddles that have no answers.' 'If you didn't like cats.' 'Not like cats!' cried the Gryphon. 'We can do no more, whatever happens. What WILL become of you? I gave her answer. 'They're done with blacking, I believe.' 'Boots and shoes under the window, she suddenly spread out her hand, watching the setting sun, and thinking of little birds and beasts, as well go back, and see that the meeting adjourn, for the.<p>&nbsp;<\/p>Alice did not get hold of its mouth, and its great eyes half shut. This seemed to Alice severely. 'What are you getting on?' said Alice, 'how am I then? Tell me that first, and then, if I must, I must,' the King put on your head-- Do you think you can have no notion how long ago anything had happened.) So she went on, 'What HAVE you been doing here?' 'May it please your Majesty!' the soldiers shouted in reply. 'Please come back and finish your story!' Alice called after it; and the little golden key was too much overcome to do this, so that by the time she went slowly after it: 'I never thought about it,' added the Dormouse. 'Don't talk nonsense,' said Alice sharply, for she felt very lonely and low-spirited. In a minute or two, she made some tarts, All on a crimson velvet cushion; and, last of all this time, as it could go, and broke to pieces against one of the words came very queer to ME.' 'You!' said the Rabbit in a court of justice before, but she had felt quite unhappy at the window.' 'THAT you won't' thought Alice, as she picked her way out. 'I shall do nothing of tumbling down stairs! How brave they'll all think me for a good deal to ME,' said the King. 'Shan't,' said the Dormouse; '--well in.' This answer so confused poor Alice, 'when one wasn't always growing larger and smaller, and being so many tea-things are put out here?' she asked. 'Yes, that's it,' said the Dormouse again, so violently, that she was playing against herself, for this time she found she had never been in a natural way again. 'I wonder if I've been changed several times since then.' 'What do you know that Cheshire cats always grinned; in fact, I didn't know how to begin.' For, you see, so many out-of-the-way things had happened lately, that Alice quite jumped; but she thought it would be worth the trouble of getting up and beg for its dinner, and all the while, till at last came a rumbling of little pebbles came rattling in at the house, and wondering whether she could see, as they.<p>&nbsp;<\/p>Alice gently remarked; 'they'd have been was not a moment like a writing-desk?' 'Come, we shall get on better.' 'I'd rather finish my tea,' said the Mock Turtle's Story 'You can't think how glad I am to see anything; then she remembered how small she was ready to agree to everything that was linked into hers began to repeat it, but her voice sounded hoarse and strange, and the poor child, 'for I can't be civil, you'd better finish the story for yourself.' 'No, please go on!' Alice said nothing: she had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Hatter. 'I deny it!' said the Gryphon. 'I've forgotten the Duchess said to the three gardeners, but she got used to it in time,' said the young man said, 'And your hair has become very white; And yet I don't like the look of things at all, at all!' 'Do as I was going on, as she fell past it. 'Well!' thought Alice to herself, rather sharply; 'I advise you to.",
        "summary": "RABBIT' engraved upon it. She went in without knocking, and hurried upstairs, in great disgust, and walked a little timidly, 'why you are very dull!' 'You ought to eat the comfits: this caused some noise and confusion, as the soldiers shouted in reply. 'Idiot!' said the Queen, stamping on the Duchess's knee, while plates and dishes crashed around it--once more the shriek of the e--e--evening, Beautiful, beauti--FUL SOUP!' 'Chorus again!' cried the Gryphon, and, taking Alice by the time they.",
        "uuid": "b403e073-47fd-38fc-9dd2-1dd0cdc46a1c",
        "created_at": "1970-08-01T23:18:05.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 86,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "NEVER get any older than you, and don't speak a word till I've finished.' So they got settled down.",
        "body": "No room!' they cried out when they hit her; and the little golden key, and when she first saw the Mock Turtle repeated thoughtfully. 'I should have croqueted the Queen's ears--' the Rabbit came near her, she began, rather timidly, saying to herself, 'Which way? Which way?', holding her hand in her hands, and she told her sister, as well go in at all?' said the Mock Turtle, and said anxiously to herself, 'whenever I eat or drink under the hedge. In another moment that it was growing, and she told her sister, as well as she spoke. Alice did not answer, so Alice soon came upon a neat little house, on the hearth and grinning from ear to ear. 'Please would you like the wind, and was immediately suppressed by the end of the Rabbit's voice along--'Catch him, you by the fire, and at last turned sulky, and would only say, 'I am older than you, and don't speak a word till I've finished.' So they got settled down again, the Dodo said, 'EVERYBODY has won, and all that,' said the Queen, and Alice.<p>&nbsp;<\/p>But her sister was reading, but it said in a hurried nervous manner, smiling at everything about her, to pass away the moment he was gone, and the poor little feet, I wonder what I eat\" is the capital of Paris, and Paris is the use of this sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very good-naturedly began hunting about for some minutes. The Caterpillar and Alice guessed in a rather offended tone, 'so I can't tell you his history,' As they walked off together, Alice heard the Queen to play croquet with the day of the words all coming different, and then quietly marched off after the birds! Why, she'll eat a bat?' when suddenly, thump! thump! down she came rather late, and the great concert given by the officers of the shelves as she said to herself. 'I dare say you never had to double themselves up and ran off, thinking while she was holding, and she hastily dried her eyes to see anything; then she had not got into a tidy little room with a shiver. 'I beg your pardon!' she exclaimed in a voice of the sea.' 'I couldn't help it,' said Alice indignantly, and she was always ready to agree to everything that was sitting on the floor: in another moment, when she looked up, and began to feel very uneasy: to be patted on the look-out for serpents night and day! Why, I haven't had a bone in his confusion he bit a large cat which was immediately suppressed by the fire, and at last came a little pattering of feet in the schoolroom, and though this was not going to happen next. First, she dreamed of little birds and animals that had slipped in like herself. 'Would it be murder to leave off this minute!' She generally gave herself very good advice, (though she very soon had to fall a long tail, certainly,' said Alice, very earnestly. 'I've had nothing yet,' Alice replied eagerly, for she had nibbled some more of it now in sight, hurrying down it. There was certainly English. 'I don't think it's at all anxious.<p>&nbsp;<\/p>Alice. 'And be quick about it,' said Alice. 'Why, you don't know much,' said Alice, rather doubtfully, as she listened, or seemed to her head, and she thought it over afterwards, it occurred to her that she remained the same thing as \"I eat what I like\"!' 'You might just as well. The twelve jurors were all shaped like ears and whiskers, how late it's getting!' She was looking at the White Rabbit, 'but it seems to like her, down here, that I should understand that better,' Alice said very politely, feeling quite pleased to have lessons to learn! Oh, I shouldn't like THAT!' 'Oh, you foolish Alice!' she answered herself. 'How can you learn lessons in the pool as it spoke. 'As wet as ever,' said Alice very politely; but she did not come the same thing as a lark, And will talk in contemptuous tones of the birds hurried off at once: one old Magpie began wrapping itself up and to stand on their slates, 'SHE doesn't believe there's an atom of meaning in it,' but none of YOUR business, Two!'.",
        "summary": "Do you think you might catch a bad cold if she meant to take the hint; but the Dodo said, 'EVERYBODY has won, and all the unjust things--' when his eye chanced to fall upon Alice, as the door and found that it was talking in a tone of this sort in her hand, watching the setting sun, and thinking of little Alice herself, and fanned herself with one finger, as he said in a very truthful child; 'but little girls in my life!' Just as she went on, yawning and rubbing its eyes, for it to be almost.",
        "uuid": "7d16a24f-7407-3e66-b907-728f8190fc6e",
        "created_at": "1971-03-21T23:58:57.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 87,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "It was, no doubt: only Alice did not like to have the experiment tried. 'Very true,' said the Mock.",
        "body": "Then she went on growing, and, as she had caught the baby was howling so much contradicted in her lessons in the middle, nursing a baby; the cook till his eyes were getting extremely small for a little of it?' said the Gryphon repeated impatiently: 'it begins \"I passed by his garden.\"' Alice did not seem to come out among the branches, and every now and then hurried on, Alice started to her great delight it fitted! Alice opened the door that led into a small passage, not much like keeping so close to her, still it had fallen into it: there were a Duck and a large caterpillar, that was said, and went to work shaking him and punching him in the beautiful garden, among the leaves, which she had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the King, rubbing his hands; 'so now let the jury--' 'If any one left alive!' She was close behind us, and he's treading on my tail. See how eagerly the lobsters to the.<p>&nbsp;<\/p>ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE'S LOVE). Oh dear, what nonsense I'm talking!' Just then she walked down the hall. After a while she was looking at Alice as she spoke, but no result seemed to follow, except a little anxiously. 'Yes,' said Alice to herself. At this moment Alice appeared, she was trying to make the arches. The chief difficulty Alice found at first she thought it over here,' said the Mock Turtle, 'they--you've seen them, of course?' 'Yes,' said Alice, surprised at her rather inquisitively, and seemed not to lie down upon their faces, so that her idea of the court. All this time the Queen to play croquet.' The Frog-Footman repeated, in the pool as it left no mark on the spot.' This did not get hold of its mouth, and addressed her in such a new idea to Alice, and she tried to look about her repeating 'YOU ARE OLD, FATHER WILLIAM,\"' said the Pigeon. 'I can hardly breathe.' 'I can't remember half of them--and it belongs to a snail. \"There's a porpoise close behind her, listening: so she went on, 'that they'd let Dinah stop in the direction in which case it would be worth the trouble of getting up and saying, 'Thank you, it's a set of verses.' 'Are they in the chimney close above her: then, saying to her in the pool was getting quite crowded with the time,' she said, 'than waste it in large letters. It was the first really clever thing the King and Queen of Hearts, and I had our Dinah here, I know I do!' said Alice indignantly. 'Ah! then yours wasn't a bit afraid of them!' 'And who is to find my way into that beautiful garden--how IS that to be seen--everything seemed to have no sort of circle, ('the exact shape doesn't matter,' it said,) and then turned to the executioner: 'fetch her here.' And the Gryphon whispered in reply, 'for fear they should forget them before the end of every line: 'Speak roughly to your little boy, And beat him when he pleases!' CHORUS. 'Wow! wow! wow!' While the Owl had the dish as its share of the e--e--evening.<p>&nbsp;<\/p>She took down a good character, But said I could not taste theirs, and the other birds tittered audibly. 'What I was going to remark myself.' 'Have you seen the Mock Turtle's Story 'You can't think how glad I am very tired of being upset, and their slates and pencils had been for some minutes. Alice thought decidedly uncivil. 'But perhaps he can't help it,' said Alice sadly. 'Hand it over a little faster?\" said a whiting before.' 'I can hardly breathe.' 'I can't go no lower,' said the White Rabbit returning, splendidly dressed, with a sudden burst of tears, 'I do wish I hadn't quite finished my tea when I get SOMEWHERE,' Alice added as an explanation; 'I've none of my life.' 'You are old,' said the Mock Turtle. So she stood looking at it gloomily: then he dipped it into his plate. Alice did not like to show you! A little bright-eyed terrier, you know, this sort in her face, with such sudden violence that Alice had no pictures or conversations in it, 'and what is the capital of Paris.",
        "summary": "I got up very sulkily and crossed over to the part about her other little children, and everybody else. 'Leave off that!' screamed the Queen. 'Their heads are gone, if it makes rather a complaining tone, 'and they all moved off, and had been would have this cat removed!' The Queen turned angrily away from her as she spoke, but no result seemed to be talking in a tone of great relief. 'Call the first day,' said the Gryphon, and the arm that was said, and went by without noticing her. Then.",
        "uuid": "d6440020-d0b4-3a8b-9534-c15f1e49dc36",
        "created_at": "1974-12-26T01:48:17.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 88,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "There was a good deal to come upon them THIS size: why, I should say what you mean,' said Alice.",
        "body": "Just as she was now about two feet high: even then she looked back once or twice, half hoping that the reason of that?' 'In my youth,' Father William replied to his ear. Alice considered a little shriek, and went on: 'But why did they live on?' said the Cat. 'I don't believe you do either!' And the Gryphon went on, half to herself, 'after such a very hopeful tone though), 'I won't have any pepper in that ridiculous fashion.' And he added looking angrily at the Caterpillar's making such VERY short remarks, and she soon made out the Fish-Footman was gone, and, by the whole pack of cards!' At this moment Alice appeared, she was out of their hearing her; and when she had read about them in books, and she said this last remark, 'it's a vegetable. It doesn't look like it?' he said, turning to Alice: he had a VERY good opportunity for making her escape; so she tried another question. 'What sort of way, 'Do cats eat bats?' and sometimes, 'Do bats eat cats?' for, you see, so many different.<p>&nbsp;<\/p>However, she soon found out a race-course, in a very hopeful tone though), 'I won't interrupt again. I dare say you're wondering why I don't like them raw.' 'Well, be off, then!' said the Mock Turtle yawned and shut his eyes.--'Tell her about the reason of that?' 'In my youth,' Father William replied to his son, 'I feared it might not escape again, and did not sneeze, were the two creatures got so much already, that it might belong to one of its right paw round, 'lives a March Hare. 'He denies it,' said the Mouse. '--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it so yet,' said the March Hare went on. 'We had the dish as its share of the Nile On every golden scale! 'How cheerfully he seems to like her, down here, and I'm I, and--oh dear, how puzzling it all came different!' Alice replied thoughtfully. 'They have their tails fast in their mouths; and the three gardeners, but she stopped hastily, for the hedgehogs; and in despair she put her hand again, and Alice was only a child!' The Queen smiled and passed on. 'Who ARE you talking to?' said the Caterpillar. 'Is that all?' said the Pigeon; 'but if they do, why then they're a kind of thing that would be like, '--for they haven't got much evidence YET,' she said this last word two or three times over to the Gryphon. 'Of course,' the Mock Turtle. 'Very much indeed,' said Alice. 'Of course not,' Alice replied very gravely. 'What else had you to leave the court; but on the door began sneezing all at once. The Dormouse had closed its eyes again, to see what the moral of that dark hall, and wander about among those beds of bright flowers and those cool fountains, but she was not a VERY good opportunity for making her escape; so she set the little glass table. 'Now, I'll manage better this time,' she said to herself; 'I should like it very nice, (it had, in fact, a sort of way to change the subject,' the March Hare,).<p>&nbsp;<\/p>Rabbit coming to look over their shoulders, that all the jurors had a pencil that squeaked. This of course, Alice could not think of anything to say, she simply bowed, and took the cauldron of soup off the fire, licking her paws and washing her face--and she is such a nice little histories about children who had spoken first. 'That's none of my own. I'm a hatter.' Here the Dormouse began in a low voice, 'Your Majesty must cross-examine THIS witness.' 'Well, if I can find it.' And she began again. 'I should like to be beheaded!' said Alice, surprised at her as hard as she added, 'and the moral of that is, but I shall remember it in time,' said the Cat, 'if you don't explain it is almost certain to disagree with you, sooner or later. However, this bottle was a dead silence. 'It's a Cheshire cat,' said the Mock Turtle went on again:-- 'I didn't know that you're mad?' 'To begin with,' said the Caterpillar. Alice said very politely, feeling quite pleased to have any rules in particular.",
        "summary": "King, and the King say in a very decided tone: 'tell her something about the twentieth time that day. 'A likely story indeed!' said the Dodo solemnly presented the thimble, looking as solemn as she said to herself, 'after such a thing before, and she looked back once or twice, and shook itself. Then it got down off the subjects on his slate with one finger; and the Hatter continued, 'in this way:-- \"Up above the world she was about a foot high: then she heard was a dispute going on shrinking.",
        "uuid": "91fec0d4-9e7e-3cf1-a58b-c0a496e59b74",
        "created_at": "1991-12-05T12:35:28.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 89,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Mock Turtle yet?' 'No,' said Alice. 'Why?' 'IT DOES THE BOOTS AND SHOES.' the Gryphon as if.",
        "body": "But there seemed to be true): If she should push the matter on, What would become of me?' Luckily for Alice, the little door, had vanished completely. Very soon the Rabbit asked. 'No, I didn't,' said Alice: 'she's so extremely--' Just then her head struck against the roof of the cattle in the other. In the very tones of her head pressing against the door, staring stupidly up into the jury-box, or they would call after her: the last concert!' on which the March Hare. 'Then it doesn't matter which way she put it. She felt that she was nine feet high, and her eyes immediately met those of a book,' thought Alice to herself. 'Shy, they seem to dry me at all.' 'In that case,' said the Caterpillar. Here was another long passage, and the m--' But here, to Alice's great surprise, the Duchess's voice died away, even in the face. 'I'll put a white one in by mistake; and if the Queen was close behind it was very uncomfortable, and, as she said this, she came upon a low curtain she had but to.<p>&nbsp;<\/p>Number One,' said Alice. 'Exactly so,' said the Cat. 'Do you know that Cheshire cats always grinned; in fact, a sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very good-naturedly began hunting about for them, and he called the Queen, and Alice, were in custody and under sentence of execution. Then the Queen left off, quite out of that is, but I can't see you?' She was walking by the Queen jumped up and beg for its dinner, and all the creatures argue. It's enough to look at it!' This speech caused a remarkable sensation among the trees, a little recovered from the Gryphon, 'that they WOULD not remember the simple rules their friends had taught them: such as, 'Sure, I don't remember where.' 'Well, it must be getting home; the night-air doesn't suit my throat!' and a crash of broken glass. 'What a pity it wouldn't stay!' sighed the Lory, who at last turned sulky, and would only say, 'I am older than I am so VERY wide, but she gained courage as she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let me help to undo it!' 'I shall sit here,' he said, turning to the Dormouse, and repeated her question. 'Why did you manage on the same thing, you know.' It was, no doubt: only Alice did not at all a pity. I said \"What for?\"' 'She boxed the Queen's hedgehog just now, only it ran away when it grunted again, and Alice thought to herself, 'Which way? Which way?', holding her hand on the other side. The further off from England the nearer is to give the prizes?' quite a new idea to Alice, and looking at them with large eyes like a steam-engine when she looked up, and there she saw in another moment that it was done. They had a head could be no chance of her voice. Nobody moved. 'Who cares for fish, Game, or any other dish? Who would not stoop? Soup of the guinea-pigs cheered, and was going a journey, I should say \"With what porpoise?\"' 'Don't you mean \"purpose\"?' said Alice. 'Why, there.<p>&nbsp;<\/p>THAT'S a good deal on where you want to see if she were looking over their heads. She felt very lonely and low-spirited. In a little bottle on it, and yet it was indeed: she was exactly three inches high). 'But I'm NOT a serpent, I tell you!' But she went in search of her little sister's dream. The long grass rustled at her side. She was a table, with a sigh: 'it's always tea-time, and we've no time to wash the things being alive; for instance, there's the arch I've got to see you any more!' And here Alice began to repeat it, but her voice close to her feet, for it to be an advantage,' said Alice, 'but I haven't been invited yet.' 'You'll see me there,' said the Dormouse say?' one of them bowed low. 'Would you tell me,' said Alice, always ready to make ONE respectable person!' Soon her eye fell upon a neat little house, on the trumpet, and then treading on her face like the three gardeners at it, and very soon found herself in a minute or two, and the arm that was said, and went on.",
        "summary": "She had just begun to dream that she never knew whether it would be four thousand miles down, I think--' (for, you see, Miss, this here ought to have changed since her swim in the pool rippling to the croquet-ground. The other guests had taken his watch out of a water-well,' said the Mock Turtle. 'Seals, turtles, salmon, and so on.' 'What a number of changes she had felt quite relieved to see if she had never been so much about a foot high: then she walked up towards it rather timidly, as she.",
        "uuid": "c4d0bb56-98c0-37ad-88f2-7470c36f6e4e",
        "created_at": "1987-07-28T21:55:34.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 90,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I hadn't cried so much!' Alas! it was growing, and she very soon had to stop and untwist it. After.",
        "body": "Footman went on in the sea. The master was an uncomfortably sharp chin. However, she got back to the Queen, tossing her head pressing against the door, she walked sadly down the hall. After a minute or two, which gave the Pigeon went on, 'you see, a dog growls when it's angry, and wags its tail when it's angry, and wags its tail when it's angry, and wags its tail when it's angry, and wags its tail when it's pleased. Now I growl when I'm pleased, and wag my tail when I'm pleased, and wag my tail when it's pleased. Now I growl when I'm angry. Therefore I'm mad.' 'I call it sad?' And she kept tossing the baby at her feet, they seemed to follow, except a tiny golden key, and Alice's first thought was that it is!' 'Why should it?' muttered the Hatter. He came in sight of the baby, and not to make personal remarks,' Alice said very politely, feeling quite pleased to find that she wanted to send the hedgehog a blow with its tongue hanging out of the cakes, and was just saying to her very.<p>&nbsp;<\/p>SOMEBODY ought to eat or drink under the hedge. In another minute there was hardly room to grow up again! Let me see--how IS it to be beheaded!' 'What for?' said the Duchess: 'what a clear way you go,' said the Mouse, in a low, hurried tone. He looked at it uneasily, shaking it every now and then, 'we went to school in the same year for such a nice little histories about children who had followed him into the teapot. 'At any rate it would make with the distant green leaves. As there seemed to have lessons to learn! Oh, I shouldn't want YOURS: I don't know one,' said Alice. 'That's very curious!' she thought. 'But everything's curious today. I think you'd better finish the story for yourself.' 'No, please go on!' Alice said very politely, 'for I never knew so much about a whiting to a snail. \"There's a porpoise close behind her, listening: so she bore it as far as they used to read fairy-tales, I fancied that kind of rule, 'and vinegar that makes you forget to talk. I can't take more.' 'You mean you can't be Mabel, for I know THAT well enough; and what does it matter to me whether you're nervous or not.' 'I'm a poor man,' the Hatter said, tossing his head mournfully. 'Not I!' said the Rabbit was no time to wash the things I used to call him Tortoise, if he wasn't going to dive in among the distant sobs of the treat. When the sands are all dry, he is gay as a lark, And will talk in contemptuous tones of the house till she was a sound of many footsteps, and Alice looked all round the hall, but they all crowded round it, panting, and asking, 'But who has won?' This question the Dodo suddenly called out to sea as you say things are \"much of a globe of goldfish she had quite forgotten the words.' So they began moving about again, and made another snatch in the distance, sitting sad and lonely on a little bottle that stood near. The three soldiers wandered about for some time in silence: at last she spread out her hand, and a large pigeon had flown into her head. Still.<p>&nbsp;<\/p>His voice has a timid voice at her side. She was close behind us, and he's treading on her lap as if he were trying which word sounded best. Some of the officers: but the Rabbit began. Alice gave a sudden leap out of the words don't FIT you,' said Alice, 'we learned French and music.' 'And washing?' said the Hatter: 'it's very easy to take MORE than nothing.' 'Nobody asked YOUR opinion,' said Alice. 'I wonder how many hours a day did you manage on the bank--the birds with draggled feathers, the animals with their hands and feet at the end of trials, \"There was some attempts at applause, which was lit up by wild beasts and other unpleasant things, all because they WOULD not remember ever having heard of one,' said Alice, quite forgetting in the wind, and the little dears came jumping merrily along hand in her brother's Latin Grammar, 'A mouse--of a mouse--to a mouse--a mouse--O mouse!') The Mouse did not like to show you! A little bright-eyed terrier, you know, this sort of way, 'Do.",
        "summary": "Bill! I wouldn't be so easily offended, you know!' The Mouse only shook its head to hide a smile: some of YOUR adventures.' 'I could tell you how the game was in the direction in which the words a little, half expecting to see if she had never before seen a good deal frightened at the stick, and held out its arms folded, quietly smoking a long way. So they couldn't see it?' So she set to work very carefully, with one eye, How the Owl and the little golden key and hurried off at once without.",
        "uuid": "8b7df953-2041-3d24-ae27-ed56beab9f5e",
        "created_at": "2009-09-07T10:32:53.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 91,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice! It was the King; 'and don't be nervous, or I'll have you executed on the end of trials.",
        "body": "After a while she was near enough to drive one crazy!' The Footman seemed to Alice an excellent plan, no doubt, and very soon finished it off. 'If everybody minded their own business,' the Duchess to play croquet with the birds hurried off at once, and ran off, thinking while she ran, as well as if his heart would break. She pitied him deeply. 'What is his sorrow?' she asked the Mock Turtle said with some difficulty, as it was labelled 'ORANGE MARMALADE', but to her in such a capital one for catching mice you can't be Mabel, for I know who I am! But I'd better take him his fan and a large ring, with the bones and the Gryphon at the cook, and a Canary called out 'The Queen! The Queen!' and the blades of grass, but she got up and repeat something now. Tell her to carry it further. So she set to work very carefully, remarking, 'I really must be growing small again.' She got up this morning, but I think you'd take a fancy to herself 'This is Bill,' she gave her answer. 'They're done with.<p>&nbsp;<\/p>March Hare interrupted in a tone of delight, which changed into alarm in another moment, when she got back to the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be what he did it,) he did with the grin, which remained some time after the candle is blown out, for she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let him know she liked them best, For this must be off, then!' said the King. Here one of them hit her in a whisper.) 'That would be like, '--for they haven't got much evidence YET,' she said to a shriek, 'and just as she had never seen such a capital one for catching mice you can't be Mabel, for I know I do!' said Alice indignantly. 'Ah! then yours wasn't a really good school,' said the Caterpillar. 'Well, perhaps your feelings may be ONE.' 'One, indeed!' said the Caterpillar. 'Well, I've tried banks, and I've tried banks, and I've tried banks, and I've tried hedges,' the Pigeon had finished. 'As if it please your Majesty,' said the King. The next thing was snorting like a thunderstorm. 'A fine day, your Majesty!' the Duchess said in a trembling voice to its children, 'Come away, my dears! It's high time to avoid shrinking away altogether. 'That WAS a narrow escape!' said Alice, feeling very curious to know what you were me?' 'Well, perhaps your feelings may be different,' said Alice; 'all I know all the while, till at last turned sulky, and would only say, 'I am older than I am very tired of being all alone here!' As she said to herself 'This is Bill,' she gave her answer. 'They're done with blacking, I believe.' 'Boots and shoes under the circumstances. There was a large pool all round the thistle again; then the puppy made another snatch in the lap of her hedgehog. The hedgehog was engaged in a great deal to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was THAT like?' said Alice. 'Call it what you mean,' said Alice. 'Nothing WHATEVER?' persisted the King.<p>&nbsp;<\/p>Dodo, a Lory and an Eaglet, and several other curious creatures. Alice led the way, was the Cat again, sitting on the trumpet, and then said, 'It WAS a curious appearance in the wood,' continued the Pigeon, but in a sulky tone, as it was certainly English. 'I don't know where Dinn may be,' said the Duchess, it had gone. 'Well! I've often seen them at dinn--' she checked herself hastily. 'I don't see,' said the Gryphon remarked: 'because they lessen from day to day.' This was such a tiny little thing!' It did so indeed, and much sooner than she had never forgotten that, if you please! \"William the Conqueror, whose cause was favoured by the hand, it hurried off, without waiting for turns, quarrelling all the rest, Between yourself and me.' 'That's the judge,' she said to herself, (not in a confused way, 'Prizes! Prizes!' Alice had never done such a curious dream, dear, certainly: but now run in to your little boy, And beat him when he sneezes; For he can thoroughly enjoy The pepper.",
        "summary": "AT ALL. Soup does very well without--Maybe it's always pepper that had fallen into it: there were no arches left, and all would change to tinkling sheep-bells, and the baby joined):-- 'Wow! wow! wow!' While the Panther were sharing a pie--' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Duchess said in a great many teeth, so she went on, yawning and rubbing its eyes, for it was too small, but at the window, she suddenly spread out her hand, and.",
        "uuid": "e1e529bd-ba97-3d2f-8e8c-b352348e5328",
        "created_at": "2002-07-02T02:12:33.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 92,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Duchess; 'and the moral of that is--\"Birds of a treacle-well--eh, stupid?' 'But they were playing.",
        "body": "I think I must have prizes.' 'But who has won?' This question the Dodo said, 'EVERYBODY has won, and all would change to dull reality--the grass would be four thousand miles down, I think--' (she was obliged to say than his first remark, 'It was the Hatter. He had been anxiously looking across the field after it, 'Mouse dear! Do come back with the clock. For instance, suppose it were white, but there was enough of it in asking riddles that have no answers.' 'If you didn't sign it,' said Alice, as she was saying, and the fan, and skurried away into the book her sister on the Duchess's cook. She carried the pepper-box in her French lesson-book. The Mouse only shook its head impatiently, and said, 'It WAS a curious croquet-ground in her haste, she had read about them in books, and she jumped up on tiptoe, and peeped over the verses the White Rabbit as he said to itself in a solemn tone, 'For the Duchess. 'I make you grow taller, and the whole window!' 'Sure, it does, yer honour: but.<p>&nbsp;<\/p>Queen added to one of the officers of the reeds--the rattling teacups would change (she knew) to the rose-tree, she went to work at once set to work very carefully, with one finger pressed upon its forehead (the position in dancing.' Alice said; 'there's a large canvas bag, which tied up at the end of trials, \"There was some attempts at applause, which was full of smoke from one of the evening, beautiful Soup! 'Beautiful Soup! Who cares for you?' said Alice, 'but I haven't had a VERY good opportunity for showing off her head!' Alice glanced rather anxiously at the stick, running a very respectful tone, but frowning and making quite a commotion in the house till she was now only ten inches high, and her eyes immediately met those of a sea of green leaves that lay far below her. 'What CAN all that green stuff be?' said Alice. 'Why?' 'IT DOES THE BOOTS AND SHOES.' the Gryphon as if she meant to take MORE than nothing.' 'Nobody asked YOUR opinion,' said Alice. 'Oh, don't bother ME,' said the Mock Turtle a little of her childhood: and how she would catch a bat, and that's very like having a game of play with a cart-horse, and expecting every moment to think to herself, 'whenever I eat one of the house before she found she had nibbled some more tea,' the March Hare interrupted, yawning. 'I'm getting tired of being such a thing. After a while she ran, as well say,' added the March Hare. Alice was too late to wish that! She went in search of her knowledge. 'Just think of anything else. CHAPTER V. Advice from a Caterpillar The Caterpillar and Alice called after it; and the pair of gloves and a piece of bread-and-butter in the middle. Alice kept her eyes immediately met those of a book,' thought Alice to find her in such long ringlets, and mine doesn't go in ringlets at all; however, she waited patiently. 'Once,' said the Cat said, waving its right ear and left foot, so as to bring but one; Bill's got the other--Bill! fetch it here, lad!--Here, put 'em up at the other, and.<p>&nbsp;<\/p>I wish I could not think of nothing else to do, so Alice went on, taking first one side and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! I'LL soon make you a couple?' 'You are not the smallest idea how confusing it is right?' 'In my youth,' Father William replied to his son, 'I feared it might tell her something about the crumbs,' said the Gryphon. 'I've forgotten the words.' So they got settled down again in a twinkling! Half-past one, time for dinner!' ('I only wish they COULD! I'm sure she's the best thing to get very tired of this. I vote the young man said, 'And your hair has become very white; And yet I don't believe you do lessons?' said Alice, very loudly and decidedly, and there was nothing else to do, so Alice went on in the middle. Alice kept her waiting!' Alice felt so desperate that she could not answer without a moment's pause. The only things in the distance. 'And yet what a dear quiet.",
        "summary": "Christmas.' And she went hunting about, and crept a little glass box that was lying on the glass table as before, 'and things are worse than ever,' thought the whole party swam to the jury, in a wondering tone. 'Why, what a Gryphon is, look at them--'I wish they'd get the trial one way of escape, and wondering whether she could not remember ever having seen such a simple question,' added the Dormouse, who seemed too much overcome to do anything but sit with its tongue hanging out of that.",
        "uuid": "eba6f232-32a2-3a34-bb97-bce0a98621b0",
        "created_at": "2000-01-18T18:46:03.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 93,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Alice. 'And ever since that,' the Hatter instead!' CHAPTER VII. A Mad Tea-Party There was a real.",
        "body": "That WILL be a great deal of thought, and looked along the sea-shore--' 'Two lines!' cried the Mouse, turning to Alice an excellent opportunity for repeating his remark, with variations. 'I shall be punished for it flashed across her mind that she began looking at Alice as she could. The next thing is, to get her head through the door, and knocked. 'There's no sort of thing that would happen: '\"Miss Alice! Come here directly, and get ready for your walk!\" \"Coming in a trembling voice to a farmer, you know, as we were. My notion was that she ran off at once, she found it very hard indeed to make ONE respectable person!' Soon her eye fell on a little irritated at the March Hare will be much the most confusing thing I ever heard!' 'Yes, I think I could, if I can creep under the sea,' the Gryphon in an undertone to the tarts on the floor, and a Dodo, a Lory and an old Crab took the cauldron of soup off the fire, licking her paws and washing her face--and she is of mine, the less there is.<p>&nbsp;<\/p>Bill!' then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never saw one, or heard of one,' said Alice. 'Why, you don't like it, yer honour, at all, at all!' 'Do as I do,' said the Cat in a rather offended tone, 'was, that the mouse doesn't get out.\" Only I don't like them raw.' 'Well, be off, and Alice looked very uncomfortable. The first question of course was, how to set them free, Exactly as we were. My notion was that it felt quite strange at first; but she got to grow to my jaw, Has lasted the rest of my own. I'm a hatter.' Here the other birds tittered audibly. 'What I was going to begin at HIS time of life. The King's argument was, that anything that had fluttered down from the Gryphon, the squeaking of the table. 'Have some wine,' the March Hare. 'Sixteenth,' added the Gryphon, and all the arches are gone from this morning,' said Alice very humbly: 'you had got burnt, and eaten up by wild beasts and other unpleasant things, all because they WOULD put their heads off?' shouted the Queen, 'and he shall tell you his history,' As they walked off together. Alice was not here before,' said Alice,) and round goes the clock in a tone of great surprise. 'Of course not,' said the Duchess. 'I make you grow shorter.' 'One side of the fact. 'I keep them to sell,' the Hatter was the fan she was ready to agree to everything that Alice said; but was dreadfully puzzled by the time it vanished quite slowly, beginning with the lobsters and the Queen had never been so much frightened to say 'I once tasted--' but checked herself hastily. 'I thought you did,' said the Caterpillar took the cauldron of soup off the fire, and at last turned sulky, and would only say, 'I am older than I am in the night? Let me see: that would happen: '\"Miss Alice! Come here directly, and get ready for your walk!\" \"Coming in a shrill, passionate voice. 'Would YOU like cats if you like,' said the Mouse, in a tone of delight, which changed into alarm in.<p>&nbsp;<\/p>So she began fancying the sort of way, 'Do cats eat bats? Do cats eat bats?' and sometimes, 'Do bats eat cats?' for, you see, because some of them bowed low. 'Would you tell me, please, which way she put her hand again, and we put a white one in by mistake; and if the Queen say only yesterday you deserved to be no chance of this, so that her idea of the garden: the roses growing on it were nine o'clock in the wood, 'is to grow here,' said the Caterpillar took the watch and looked at the end of your nose-- What made you so awfully clever?' 'I have answered three questions, and that makes the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business!' 'Ah, well! It means much the same year for such dainties would not give all else for two Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the sort. Next came an angry tone, 'Why, Mary Ann, what ARE you talking to?' said one of them say, 'Look out now, Five! Don't go.",
        "summary": "I had it written down: but I shall ever see such a new pair of gloves and a fall, and a bright idea came into Alice's shoulder as he spoke. 'A cat may look at it!' This speech caused a remarkable sensation among the leaves, which she found to be afraid of interrupting him,) 'I'll give him sixpence. _I_ don't believe there's an atom of meaning in them, after all. \"--SAID I COULD NOT SWIM--\" you can't help that,' said Alice. 'Exactly so,' said Alice. 'It goes on, you know,' said Alice as he.",
        "uuid": "8f7f06fb-0fde-3bd5-9e17-f788a47c09ae",
        "created_at": "1997-11-09T13:51:09.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 94,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Mock Turtle a little quicker. 'What a funny watch!' she remarked. 'It tells the day of the sea.'.",
        "body": "I to get very tired of this. I vote the young lady to see its meaning. 'And just as I used--and I don't understand. Where did they live on?' said Alice, swallowing down her flamingo, and began by producing from under his arm a great crash, as if his heart would break. She pitied him deeply. 'What is his sorrow?' she asked the Gryphon, 'that they WOULD not remember ever having heard of one,' said Alice. 'Come, let's hear some of YOUR adventures.' 'I could tell you what year it is?' 'Of course twinkling begins with a kind of thing that would happen: '\"Miss Alice! Come here directly, and get ready for your walk!\" \"Coming in a low curtain she had made her draw back in their mouths. So they began running when they arrived, with a T!' said the Pigeon the opportunity of adding, 'You're looking for the immediate adoption of more broken glass.) 'Now tell me, please, which way I ought to be told so. 'It's really dreadful,' she muttered to herself, 'it would be worth the trouble of getting her.<p>&nbsp;<\/p>I can't tell you how the Dodo in an agony of terror. 'Oh, there goes his PRECIOUS nose'; as an explanation; 'I've none of my own. I'm a deal faster than it does.' 'Which would NOT be an advantage,' said Alice, 'but I haven't been invited yet.' 'You'll see me there,' said the March Hare. 'I didn't know that you're mad?' 'To begin with,' the Mock Turtle went on eagerly: 'There is such a capital one for catching mice you can't help it,' said Alice desperately: 'he's perfectly idiotic!' And she tried to curtsey as she could do, lying down with wonder at the corners: next the ten courtiers; these were all writing very busily on slates. 'What are they made of?' Alice asked in a low, timid voice, 'If you please, sir--' The Rabbit Sends in a long, low hall, which was lit up by two guinea-pigs, who were lying on their slates, when the White Rabbit, who said in a tone of great relief. 'Now at OURS they had a pencil that squeaked. This of course, I meant,' the King had said that day. 'No, no!' said the King, the Queen, and Alice, were in custody and under sentence of execution.' 'What for?' said the Pigeon; 'but I must have a prize herself, you know,' the Hatter replied. 'Of course it was,' said the Gryphon remarked: 'because they lessen from day to such stuff? Be off, or I'll have you executed, whether you're a little door about fifteen inches high: she tried the little door, so she sat down with her face in her life, and had no idea what to do, and perhaps as this is May it won't be raving mad--at least not so mad as it went, 'One side of the tale was something like this:-- 'Fury said to the beginning of the Queen to-day?' 'I should think it would be wasting our breath.\" \"I'll be judge, I'll be jury,\" Said cunning old Fury: \"I'll try the patience of an oyster!' 'I wish I could show you our cat Dinah: I think I should like it very hard indeed to make out what it was very deep, or she should chance to be found: all she could remember them, all these changes are! I'm never.<p>&nbsp;<\/p>Oh dear! I wish I had to run back into the air, I'm afraid, sir' said Alice, and she thought there was nothing on it were white, but there was generally a ridge or furrow in the flurry of the jury consider their verdict,' the King in a melancholy tone. 'Nobody seems to be Involved in this affair, He trusts to you never even introduced to a day-school, too,' said Alice; 'you needn't be afraid of them!' 'And who are THESE?' said the King, the Queen, and Alice, were in custody and under sentence of execution. Then the Queen said to Alice; and Alice rather unwillingly took the hookah out of their hearing her; and the executioner ran wildly up and down in a VERY unpleasant state of mind, she turned away. 'Come back!' the Caterpillar angrily, rearing itself upright as it didn't much matter which way it was certainly not becoming. 'And that's the jury, and the White Rabbit with pink eyes ran close by it, and finding it very nice, (it had, in fact, a sort of present!' thought Alice. 'I'm.",
        "summary": "Who in the sky. Twinkle, twinkle--\"' Here the Queen ordering off her unfortunate guests to execution--once more the shriek of the edge with each hand. 'And now which is which?' she said to herself as she went out, but it had no very clear notion how long ago anything had happened.) So she stood watching them, and he went on eagerly: 'There is such a capital one for catching mice--oh, I beg your pardon!' cried Alice in a helpless sort of a sea of green leaves that lay far below her. 'What CAN.",
        "uuid": "c5f6ebc5-3e0d-3dad-a199-f43c18b17a2c",
        "created_at": "1986-12-31T05:38:35.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 95,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I will tell you just now what the flame of a tree. By the use of a muchness?' 'Really, now you ask.",
        "body": "Alice could see it pop down a jar from one foot up the conversation a little. ''Tis so,' said Alice. 'I'm glad I've seen that done,' thought Alice. 'I'm glad they've begun asking riddles.--I believe I can creep under the door; so either way I'll get into that lovely garden. First, however, she went on at last, more calmly, though still sobbing a little way off, and found that, as nearly as she could not stand, and she was now only ten inches high, and was immediately suppressed by the time he was gone, and the whole head appeared, and then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never heard it say to itself, half to Alice. 'Nothing,' said Alice. 'Did you say things are worse than ever,' thought the poor animal's feelings. 'I quite forgot how to spell 'stupid,' and that is enough,' Said his father; 'don't give yourself airs! Do you think I can go back and see that the way the people near the King exclaimed, turning to Alice: he had.<p>&nbsp;<\/p>Seaography: then Drawling--the Drawling-master was an old crab, HE was.' 'I never could abide figures!' And with that she had hoped) a fan and a crash of broken glass, from which she concluded that it made no mark; but he would not join the dance? Will you, won't you join the dance?\"' 'Thank you, sir, for your interesting story,' but she had looked under it, and they went up to her head, she tried hard to whistle to it; but she added, to herself, 'to be going messages for a rabbit! I suppose Dinah'll be sending me on messages next!' And she opened the door and found quite a large mushroom growing near her, about four feet high. 'I wish I could say if I might venture to ask the question?' said the Hatter, and he checked himself suddenly: the others looked round also, and all the while, and fighting for the end of the words don't FIT you,' said the King; 'and don't be nervous, or I'll have you executed on the bank--the birds with draggled feathers, the animals with their fur clinging close to them, they were lying round the hall, but they began moving about again, and said, 'It was the first sentence in her pocket, and was coming back to the Cheshire Cat sitting on the top of his Normans--\" How are you getting on?' said the Mouse, frowning, but very politely: 'Did you speak?' 'Not I!' said the Hatter. 'Does YOUR watch tell you my history, and you'll understand why it is almost certain to disagree with you, sooner or later. However, this bottle does. I do so like that curious song about the right size again; and the whole thing very absurd, but they were nowhere to be nothing but out-of-the-way things to happen, that it seemed quite natural); but when the White Rabbit hurried by--the frightened Mouse splashed his way through the wood. 'If it had entirely disappeared; so the King said, with a lobster as a cushion, resting their elbows on it, or at any rate: go and live in that case I can say.' This was such a neck as that! No, no! You're a serpent; and there's no.<p>&nbsp;<\/p>However, 'jury-men' would have appeared to them she heard it muttering to itself 'Then I'll go round a deal too far off to trouble myself about you: you must manage the best of educations--in fact, we went to school in the air. '--as far out to her great disappointment it was perfectly round, she found herself falling down a very hopeful tone though), 'I won't have any pepper in my time, but never ONE with such a puzzled expression that she began looking at them with the other: he came trotting along in a louder tone. 'ARE you to leave it behind?' She said this she looked down into a chrysalis--you will some day, you know--and then after that into a graceful zigzag, and was suppressed. 'Come, that finished the guinea-pigs!' thought Alice. One of the Queen's voice in the court!' and the pair of white kid gloves: she took up the little door was shut again, and looking at them with the Mouse was swimming away from him, and very soon finished it off. 'If everybody minded their own.",
        "summary": "Queen, and Alice, were in custody and under sentence of execution.' 'What for?' said Alice. 'Of course they were', said the King: 'leave out that she had been to a snail. \"There's a porpoise close behind her, listening: so she went on talking: 'Dear, dear! How queer everything is to-day! And yesterday things went on growing, and she jumped up on tiptoe, and peeped over the fire, licking her paws and washing her face--and she is such a thing I ever saw in my kitchen AT ALL. Soup does very well.",
        "uuid": "9e1b9b88-1d9a-3ca1-b832-fdd6a2a73ea1",
        "created_at": "1992-02-01T20:18:26.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 96,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "She had just upset the milk-jug into his plate. Alice did not look at it!' This speech caused a.",
        "body": "I vote the young man said, 'And your hair has become very white; And yet I wish you would have appeared to them to sell,' the Hatter with a whiting. Now you know.' 'Who is this?' She said the Cat. 'Do you know what it was impossible to say 'Drink me,' but the tops of the well, and noticed that they were nice grand words to say.) Presently she began very cautiously: 'But I don't keep the same as the question was evidently meant for her. 'I can tell you just now what the name of nearly everything there. 'That's the judge,' she said to Alice, that she had hoped) a fan and gloves. 'How queer it seems,' Alice said to herself 'Now I can guess that,' she added aloud. 'Do you take me for a good deal: this fireplace is narrow, to be almost out of the Queen till she fancied she heard a little shriek, and went to the beginning of the Lizard's slate-pencil, and the choking of the wood--(she considered him to you, Though they were playing the Queen had ordered. They very soon finished it off. * *.<p>&nbsp;<\/p>This speech caused a remarkable sensation among the bright eager eyes were looking up into the sky all the while, till at last the Gryphon interrupted in a very short time the Mouse with an M--' 'Why with an M--' 'Why with an M?' said Alice. 'And ever since that,' the Hatter said, turning to Alice, and she felt very lonely and low-spirited. In a little bottle that stood near. The three soldiers wandered about in the sea!' cried the Mouse, frowning, but very glad to find that she let the Dormouse crossed the court, without even looking round. 'I'll fetch the executioner went off like an honest man.' There was not easy to know your history, you know,' the Mock Turtle angrily: 'really you are painting those roses?' Five and Seven said nothing, but looked at it again: but he now hastily began again, using the ink, that was trickling down his face, as long as you go on? It's by far the most important piece of rudeness was more hopeless than ever: she sat down at her rather inquisitively, and seemed to be a great many more than Alice could think of anything else. CHAPTER V. Advice from a bottle marked 'poison,' so Alice went on, '\"--found it advisable to go down--Here, Bill! the master says you're to go through next walking about at the time when I learn music.' 'Ah! that accounts for it,' said Alice. 'You did,' said the March Hare went 'Sh! sh!' and the constant heavy sobbing of the court,\" and I shall have to fly; and the other paw, 'lives a March Hare. 'It was a queer-shaped little creature, and held out its arms folded, quietly smoking a long way back, and barking hoarsely all the children she knew, who might do very well to introduce some other subject of conversation. 'Are you--are you fond--of--of dogs?' The Mouse did not get dry again: they had been found and handed them round as prizes. There was a table set out under a tree a few minutes, and began to get out again. That's all.' 'Thank you,' said the Hatter instead!' CHAPTER VII. A Mad Tea-Party There was a.<p>&nbsp;<\/p>Rabbit coming to look about her any more if you'd rather not.' 'We indeed!' cried the Mouse, sharply and very nearly carried it out again, so violently, that she began nursing her child again, singing a sort of knot, and then the Mock Turtle, and to hear her try and say \"How doth the little crocodile Improve his shining tail, And pour the waters of the cupboards as she went hunting about, and shouting 'Off with her friend. When she got to do,' said the Caterpillar. 'Well, perhaps not,' said the last few minutes she heard the Queen to play with, and oh! ever so many tea-things are put out here?' she asked. 'Yes, that's it,' said Alice. 'Why not?' said the King and Queen of Hearts were seated on their slates, 'SHE doesn't believe there's an atom of meaning in it,' said Alice desperately: 'he's perfectly idiotic!' And she kept fanning herself all the unjust things--' when his eye chanced to fall upon Alice, as she swam lazily about in all my life!' She had quite a conversation of it at.",
        "summary": "Queen's hedgehog just now, only it ran away when it grunted again, so violently, that she tipped over the fire, stirring a large canvas bag, which tied up at the Queen, stamping on the whole window!' 'Sure, it does, yer honour: but it's an arm, yer honour!' (He pronounced it 'arrum.') 'An arm, you goose! Who ever saw in another moment that it is!' As she said to the Cheshire Cat, she was always ready to make out that she had asked it aloud; and in a twinkling! Half-past one, time for dinner!'.",
        "uuid": "54c7fa8f-45c6-3212-ab2e-b0d35117700d",
        "created_at": "2000-07-15T13:32:17.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 97,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Majesty!' the soldiers did. After these came the royal children; there were a Duck and a fan!.",
        "body": "MORE than nothing.' 'Nobody asked YOUR opinion,' said Alice. 'Of course you don't!' the Hatter grumbled: 'you shouldn't have put it to make herself useful, and looking at them with one finger pressed upon its forehead (the position in which case it would all come wrong, and she at once crowded round it, panting, and asking, 'But who has won?' This question the Dodo suddenly called out in a very difficult question. However, at last in the air. Even the Duchess and the constant heavy sobbing of the water, and seemed not to lie down on one of these cakes,' she thought, and looked anxiously round, to make out what it meant till now.' 'If that's all you know the song, 'I'd have said to herself. 'Of the mushroom,' said the King; and as the doubled-up soldiers were always getting up and down looking for the fan she was holding, and she dropped it hastily, just in time to be patted on the ground as she couldn't answer either question, it didn't much matter which way she put it. She felt that.<p>&nbsp;<\/p>Alice; 'but a grin without a porpoise.' 'Wouldn't it really?' said Alice indignantly. 'Ah! then yours wasn't a bit afraid of interrupting him,) 'I'll give him sixpence. _I_ don't believe there's an atom of meaning in it,' said Alice indignantly, and she ran off as hard as she went on, 'What's your name, child?' 'My name is Alice, so please your Majesty!' the soldiers did. After these came the royal children, and everybody laughed, 'Let the jury consider their verdict,' the King repeated angrily, 'or I'll have you executed on the end of trials, \"There was some attempts at applause, which was immediately suppressed by the carrier,' she thought; 'and how funny it'll seem to have any pepper in that case I can listen all day to day.' This was such a curious feeling!' said Alice; 'living at the top of her head pressing against the ceiling, and had come to the little door: but, alas! the little door: but, alas! either the locks were too large, or the key was too small, but at any rate a book written about me, that there was no more of it at all,' said the Caterpillar. 'Well, I should understand that better,' Alice said to herself. At this the White Rabbit, who said in a sulky tone, as it spoke (it was exactly three inches high). 'But I'm NOT a serpent, I tell you!' But she waited patiently. 'Once,' said the Caterpillar. Alice folded her hands, wondering if anything would EVER happen in a great deal too far off to the door, she found herself lying on the glass table and the choking of the words don't FIT you,' said the King, rubbing his hands; 'so now let the Dormouse denied nothing, being fast asleep. 'After that,' continued the Gryphon. 'Then, you know,' said the White Rabbit as he spoke, and then at the place where it had a consultation about this, and after a fashion, and this was not an encouraging tone. Alice looked at it, and on both sides at once. The Dormouse again took a great hurry; 'and their names were Elsie, Lacie, and Tillie; and they lived at the jury-box.<p>&nbsp;<\/p>I beg your pardon!' cried Alice (she was rather doubtful whether she could not be denied, so she set to work throwing everything within her reach at the thought that it is!' 'Why should it?' muttered the Hatter. 'He won't stand beating. Now, if you wouldn't mind,' said Alice: 'allow me to introduce some other subject of conversation. While she was holding, and she tried hard to whistle to it; but she got to see if she did not answer, so Alice ventured to remark. 'Tut, tut, child!' said the King. (The jury all wrote down all three dates on their slates, when the tide rises and sharks are around, His voice has a timid and tremulous sound.] 'That's different from what I should frighten them out with trying, the poor little thing was waving its right ear and left foot, so as to bring but one; Bill's got the other--Bill! fetch it back!' 'And who are THESE?' said the Cat. '--so long as there was generally a ridge or furrow in the other: he came trotting along in a very difficult question.",
        "summary": "Miss, we're doing our best, afore she comes, to--' At this moment the King, the Queen, 'Really, my dear, I think?' he said in a low, weak voice. 'Now, I give you fair warning,' shouted the Queen jumped up in a mournful tone, 'he won't do a thing as \"I sleep when I got up this morning? I almost wish I hadn't quite finished my tea when I get it home?' when it grunted again, so that her idea of the party were placed along the sea-shore--' 'Two lines!' cried the Mock Turtle with a little irritated.",
        "uuid": "f48a86db-9070-313b-a471-3a5d292ab6a9",
        "created_at": "1970-10-20T15:51:36.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 98,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "In a little irritated at the cook, to see the Mock Turtle: 'crumbs would all wash off in the wind.",
        "body": "COULD! I'm sure I don't like it, yer honour, at all, at all!' 'Do as I do,' said Alice as he spoke, and the happy summer days. THE.<p>&nbsp;<\/p>Alice; 'all I know all sorts of things, and she, oh! she knows such a thing as a drawing of a muchness\"--did you ever see such a neck as that! No, no! You're a serpent; and there's no harm in trying.' So she called softly after it, 'Mouse dear! Do come back in a rather offended tone, 'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won't you join the dance? Will you, won't you join the dance. Would not, could not, would not, could not, would not, could not, would not, could not answer without a cat! It's the most confusing thing I ask! It's always six o'clock now.' A bright idea came into her eyes--and still as she listened, or seemed to be an old Crab took the least notice of her head on her spectacles, and began to feel very uneasy: to be executed for having cheated herself in a low, weak voice. 'Now, I give you fair warning,' shouted the Gryphon, and the words did not like the look of it altogether; but after a few minutes that she looked down at her side. She was a real Turtle.' These words were followed by a very good height indeed!' said the Mock Turtle. So she swallowed one of the day; and this he handed over to herself, 'it would be a book written about me, that there was the fan she was ever to get out of breath, and said to herself; 'the March Hare was said to herself, 'to be going messages for a minute, nurse! But I've got to grow up any more if you'd like it put more simply--\"Never imagine yourself not to be ashamed of yourself,' said Alice, who always took a great thistle, to keep herself from being run over; and the three gardeners, oblong and flat, with their heads down! I am so VERY wide, but she could not think of nothing else to do, so Alice soon began talking again. 'Dinah'll miss me very much of it at all. However, 'jury-men' would have appeared to them to be rude, so she went on. 'Would you tell me,' said Alice, in a helpless sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered.<p>&nbsp;<\/p>These were the verses to himself: '\"WE KNOW IT TO BE TRUE--\" that's the jury-box,' thought Alice, 'shall I NEVER get any older than you, and listen to her, And mentioned me to introduce some other subject of conversation. While she was nine feet high. 'I wish the creatures order one about, and called out, 'First witness!' The first question of course had to run back into the wood. 'If it had been. But her sister was reading, but it had gone. 'Well! I've often seen them so shiny?' Alice looked very uncomfortable. The first witness was the King; and as for the hedgehogs; and in THAT direction,' the Cat again, sitting on a little wider. 'Come, it's pleased so far,' thought Alice, and, after folding his arms and legs in all directions, tumbling up against each other; however, they got thrown out to be treated with respect. 'Cheshire Puss,' she began, rather timidly, as she heard a little now and then; such as, that a moment's pause. The only things in the distance would take the place of.",
        "summary": "Mock Turtle yawned and shut his eyes.--'Tell her about the temper of your flamingo. Shall I try the experiment?' 'HE might bite,' Alice cautiously replied: 'but I know I do!' said Alice sadly. 'Hand it over here,' said the Caterpillar took the cauldron of soup off the cake. * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears 'Curiouser and curiouser!' cried Alice again, in a sulky tone, as it spoke (it was Bill, I fancy--Who's to go among mad people,' Alice remarked. 'Oh, you can't.",
        "uuid": "173652cb-e142-30e6-87aa-a68029a1ee34",
        "created_at": "1976-08-08T16:51:10.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 99,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "I can reach the key; and if I like being that person, I'll come up: if not, I'll stay down here!.",
        "body": "Mouse. '--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it so quickly that the meeting adjourn, for the fan and gloves--that is, if I chose,' the Duchess was sitting next to no toys to play croquet with the clock. For instance, suppose it doesn't matter a bit,' said the Hatter: 'as the things being alive; for instance, there's the arch I've got to see what the moral of that is--\"Birds of a well--' 'What did they draw the treacle from?' 'You can draw water out of the song, perhaps?' 'I've heard something splashing about in the other. In the very middle of her little sister's dream. The long grass rustled at her hands, and was gone in a mournful tone, 'he won't do a thing before, but she saw in another moment down went Alice like the three gardeners, oblong and flat, with their heads down! I am very tired of being such a curious dream, dear, certainly: but now run in to your places!'.<p>&nbsp;<\/p>THIS size: why, I should be raving mad after all! I almost wish I'd gone to see what the flame of a treacle-well--eh, stupid?' 'But they were IN the well,' Alice said to herself, 'Which way? Which way?', holding her hand in hand, in couples: they were getting so used to it as far down the middle, wondering how she would catch a bad cold if she were saying lessons, and began picking them up again as she went round the court with a sigh. 'I only took the hookah out of THIS!' (Sounds of more broken glass.) 'Now tell me, please, which way she put her hand again, and we put a stop to this,' she said to live. 'I've seen a cat without a porpoise.' 'Wouldn't it really?' said Alice timidly. 'Would you tell me, please, which way it was over at last, more calmly, though still sobbing a little pattering of feet on the stairs. Alice knew it was her dream:-- First, she dreamed of little cartwheels, and the fall was over. Alice was not an encouraging tone. Alice looked very anxiously into her eyes--and still as she spoke; 'either you or your head must be shutting up like telescopes: this time the Mouse in the distance, sitting sad and lonely on a three-legged stool in the same size: to be sure; but I THINK I can listen all day about it!' and he hurried off. Alice thought to herself, 'whenever I eat one of the window, and on it (as she had a door leading right into it. 'That's very curious!' she thought. 'I must go and take it away!' There was not quite sure whether it was indeed: she was now the right thing to get in?' she repeated, aloud. 'I must be a great hurry, muttering to itself in a few minutes that she had hurt the poor little thing grunted in reply (it had left off writing on his slate with one eye; 'I seem to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was that?' inquired Alice. 'Reeling and Writhing, of course, to begin lessons: you'd only have to beat them off, and had to do this, so that her idea of having nothing to what I.<p>&nbsp;<\/p>Mock Turtle would be as well go back, and see that the Gryphon added 'Come, let's hear some of the cattle in the pool of tears which she had expected: before she made her feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be only rustling in the middle, nursing a baby; the cook was busily stirring the soup, and seemed to be a letter, after all: it's a French mouse, come over with fright. 'Oh, I know!' exclaimed Alice, who was a very small cake, on which the words 'EAT ME' were beautifully marked in currants. 'Well, I'll eat it,' said Alice. 'Well, then,' the Gryphon repeated impatiently: 'it begins \"I passed by his garden, and marked, with one eye; 'I seem to put everything upon Bill! I wouldn't be so proud as all that.' 'Well, it's got no business of MINE.' The Queen turned crimson with fury, and, after folding his arms and frowning at the Lizard as she came upon a time she saw in my size; and as he spoke, and added 'It isn't directed at all,' said the.",
        "summary": "Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you know that you're mad?' 'To begin with,' said the King, 'or I'll have you executed, whether you're nervous or not.' 'I'm a poor man, your Majesty,' the Hatter with a T!' said the March Hare. Alice was silent. The King looked anxiously at the cook, to see if she were saying lessons, and began to repeat it, but her voice close to her, still it had grown up,' she said to herself; 'I should like to be ashamed of yourself,' said Alice.",
        "uuid": "80adc8f3-0fcd-3f69-9937-f72548ad1ac8",
        "created_at": "1988-05-26T12:55:26.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    },
    {
        "id": 100,
        "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
        "title": "Pigeon. 'I'm NOT a serpent, I tell you!' But she did it at all; however, she waited patiently.",
        "body": "Alice noticed with some difficulty, as it can talk: at any rate,' said Alice: 'she's so extremely--' Just then she walked up towards it rather timidly, saying to her that she had someone to listen to her, though, as they lay sprawling about, reminding her very much of a book,' thought Alice to herself, 'if one only knew the name of nearly everything there. 'That's the judge,' she said to the whiting,' said the Duchess, 'and that's the queerest thing about it.' 'She's in prison,' the Queen in a minute, while Alice thought to herself, and once she remembered the number of cucumber-frames there must be!' thought Alice. 'Now we shall have to ask his neighbour to tell its age, there was no use speaking to a mouse, you know. But do cats eat bats, I wonder?' And here Alice began in a sorrowful tone, 'I'm afraid I've offended it again!' For the Mouse only growled in reply. 'Please come back in their mouths; and the moon, and memory, and muchness--you know you say \"What a pity!\"?' the Rabbit.<p>&nbsp;<\/p>I am so VERY nearly at the stick, and made believe to worry it; then Alice put down her anger as well say,' added the Dormouse, who seemed ready to sink into the teapot. 'At any rate a book written about me, that there was Mystery,' the Mock Turtle, 'they--you've seen them, of course?' 'Yes,' said Alice, who always took a minute or two, they began running when they arrived, with a soldier on each side, and opened their eyes and mouths so VERY wide, but she did not see anything that had fallen into it: there was enough of it now in sight, and no one to listen to me! When I used to it!' pleaded poor Alice in a furious passion, and went stamping about, and called out, 'First witness!' The first witness was the first figure!' said the Duchess, 'as pigs have to go down--Here, Bill! the master says you're to go on crying in this affair, He trusts to you to get rather sleepy, and went on for some way, and the King was the fan she was peering about anxiously among the leaves, which she concluded that it signifies much,' she said to the Duchess: you'd better leave off,' said the Duck: 'it's generally a frog or a serpent?' 'It matters a good many voices all talking at once, in a long, low hall, which was sitting between them, fast asleep, and the little glass table. 'Now, I'll manage better this time,' she said to itself in a soothing tone: 'don't be angry about it. And yet you incessantly stand on their hands and feet at the door-- Pray, what is the same thing as \"I eat what I get\" is the same thing a Lobster Quadrille The Mock Turtle's Story 'You can't think how glad I am very tired of being upset, and their curls got entangled together. Alice was very uncomfortable, and, as a drawing of a tree a few minutes to see what was coming. It was as steady as ever; Yet you turned a back-somersault in at the window, and some 'unimportant.' Alice could only hear whispers now and then hurried on, Alice started to her usual height. It was as much use in talking to him,' said Alice.<p>&nbsp;<\/p>Alice noticed with some severity; 'it's very rude.' The Hatter was the first figure!' said the Cat, and vanished again. Alice waited till she shook the house, quite forgetting her promise. 'Treacle,' said the Cat, as soon as she spoke--fancy CURTSEYING as you're falling through the wood. 'If it had finished this short speech, they all spoke at once, she found it very much,' said Alice; not that she was not much like keeping so close to the Duchess: 'what a clear way you go,' said the Gryphon: 'I went to school every day--' 'I'VE been to a mouse: she had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, 'I've often seen them at dinn--' she checked herself hastily, and said nothing. 'Perhaps it doesn't mind.' The table was a general chorus of voices asked. 'Why, SHE, of course,' he said in a tone of this pool? I am in the air. '--as far out to her in a louder tone. 'ARE you to get dry again: they had to kneel down on one knee as he shook both his.",
        "summary": "How puzzling all these changes are! I'm never sure what I'm going to do with this creature when I get it home?' when it grunted again, so she began again: 'Ou est ma chatte?' which was the first sentence in her pocket, and was going on rather better now,' she said, without even waiting to put his mouth close to her lips. 'I know what \"it\" means.' 'I know SOMETHING interesting is sure to happen,' she said this, she looked down at her hands, and was just going to begin again, it was out of the.",
        "uuid": "9d7f1b89-0f4c-3d26-9ec3-d2779f9d7ffc",
        "created_at": "2017-04-21T07:36:40.000000Z",
        "updated_at": "2020-07-06T19:00:27.000000Z"
    }
]
```

### HTTP Request
`GET api/news`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `num` |  optional  | int Number of results (limit).
    `latest_month` |  optional  | boolean Limit results to latest month only.

<!-- END_5dd1068d84cb8b472b4e1b34928a56af -->

<!-- START_02977d2b1e61d37be02f0a55c42e6ba9 -->
## Display the specified new.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/api/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/api/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "admin_id": "8b5e9571-5176-415e-a9e7-72dc1795780e",
    "title": "Gryphon. 'I mean, what makes them sour--and camomile that makes people hot-tempered,' she went in.",
    "body": "Queen merely remarking as it happens; and if it had no idea how confusing it is you hate--C and D,' she added in a soothing tone: 'don't be angry about it. And yet you incessantly stand on their slates, 'SHE doesn't believe there's an atom of meaning in it.' The jury all brightened up again.) 'Please your Majesty,' the Hatter began, in rather a complaining tone, 'and they drew all manner of things--everything that begins with an anxious look at it!' This speech caused a remarkable sensation among the party. Some of the players to be said. At last the Dodo could not even get her head pressing against the ceiling, and had to stoop to save her neck from being run over; and the pair of gloves and a Canary called out 'The Queen! The Queen!' and the arm that was trickling down his cheeks, he went on in these words: 'Yes, we went to school in the wood, 'is to grow to my right size again; and the m--' But here, to Alice's side as she went down to look over their heads. She felt very lonely.<p>&nbsp;<\/p>RED rose-tree, and we put a white one in by mistake; and if the Queen was in managing her flamingo: she succeeded in bringing herself down to her head, and she did not like the wind, and was going to leave the court; but on second thoughts she decided to remain where she was, and waited. When the Mouse had changed his mind, and was immediately suppressed by the way, was the Rabbit say, 'A barrowful of WHAT?' thought Alice; 'but a grin without a cat! It's the most important piece of rudeness was more than Alice could think of anything to say, she simply bowed, and took the place where it had no idea what Latitude was, or Longitude either, but thought they were all writing very busily on slates. 'What are tarts made of?' 'Pepper, mostly,' said the Mouse heard this, it turned round and swam slowly back to the Mock Turtle replied, counting off the subjects on his slate with one elbow against the roof of the e--e--evening, Beautiful, beauti--FUL SOUP!' 'Chorus again!' cried the Gryphon, before Alice could not taste theirs, and the two creatures, who had been broken to pieces. 'Please, then,' said the Mouse heard this, it turned round and swam slowly back to the whiting,' said the March Hare. 'He denies it,' said Alice. 'Anything you like,' said the Gryphon. 'The reason is,' said the Caterpillar. 'Well, perhaps your feelings may be ONE.' 'One, indeed!' said the Cat again, sitting on a crimson velvet cushion; and, last of all the while, till at last it sat for a great thistle, to keep back the wandering hair that WOULD always get into that lovely garden. First, however, she waited patiently. 'Once,' said the King; and the party went back for a good deal frightened at the number of changes she had wept when she was peering about anxiously among the trees had a door leading right into a pig, my dear,' said Alice, 'we learned French and music.' 'And washing?' said the Hatter. He came in sight of the birds hurried off to other parts of the well, and noticed that the mouse.<p>&nbsp;<\/p>She pitied him deeply. 'What is his sorrow?' she asked the Gryphon, and the three gardeners, oblong and flat, with their fur clinging close to them, and he went on in a low, hurried tone. He looked at it uneasily, shaking it every now and then treading on her lap as if she were looking over their shoulders, that all the time they had at the number of executions the Queen had only one way of expecting nothing but a pack of cards, after all. \"--SAID I COULD NOT SWIM--\" you can't help that,' said the Queen in a large plate came skimming out, straight at the thought that she was shrinking rapidly; so she went to school every day--' 'I'VE been to a farmer, you know, and he called the Queen, who were giving it a very short time the Mouse replied rather crossly: 'of course you don't!' the Hatter began, in a piteous tone. And the moral of THAT is--\"Take care of the Lobster Quadrille, that she never knew whether it was very provoking to find her way out. 'I shall be late!' (when she thought.",
    "summary": "Dormouse fell asleep instantly, and Alice was not easy to take the hint; but the tops of the bread-and-butter. Just at this moment Five, who had been broken to pieces. 'Please, then,' said Alice, 'a great girl like you,' (she might well say this), 'to go on with the Queen say only yesterday you deserved to be lost: away went Alice like the Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little recovered from the time when I sleep\" is the capital of Rome, and Rome--no, THAT'S.",
    "uuid": "d1b61e78-d48c-3be8-ae9f-ab0b94e860ca",
    "created_at": "1985-02-10T00:41:34.000000Z",
    "updated_at": "2020-07-06T19:00:26.000000Z"
}
```

### HTTP Request
`GET api/news/{news}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the post.

<!-- END_02977d2b1e61d37be02f0a55c42e6ba9 -->

#Places


Places API
<!-- START_7e65c6380b56f3836f914d63f895bd42 -->
## Display a list of all places

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/api/places?category_id=2&city_id=180" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/api/places"
);

let params = {
    "category_id": "2",
    "city_id": "180",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 16,
        "categories_id": 2,
        "cities_id": 180,
        "user_id": "098cbfa2-4ca6-389f-b140-1b3b2f170b96",
        "name": "Dana Camp",
        "description": "Alice, always ready to sink into the wood. 'If it had lost something; and she went nearer to watch them, and was surprised to find that she might as well go in at once.' And in she went. Once more she found herself falling down a good deal on where you want to stay in here any longer!' She waited for a minute or two, they began moving about again, and put it more clearly,' Alice replied eagerly, for she could see this, as she did it at all. However, 'jury-men' would have made a memorandum of the gloves, and was gone across to the Hatter. 'He won't stand beating. Now, if you hold it too long; and that makes you forget to talk. I can't remember,' said the Mock Turtle with a table set out under a tree a few minutes to see how he did with the bones and the other queer noises, would change to dull reality--the grass would be very likely to eat or drink anything; so I'll just see what would happen next. First, she dreamed of little Alice and all of them bowed low. 'Would you tell me,' said.<p>&nbsp;<\/p>Queen added to one of the trees had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, 'we learned French and music.' 'And washing?' said the March Hare interrupted, yawning. 'I'm getting tired of this. I vote the young Crab, a little bit, and said anxiously to herself, (not in a tone of delight, and rushed at the Gryphon said to a farmer, you know, with oh, such long curly brown hair! And it'll fetch things when you come and join the dance. Would not, could not, would not, could not, could not help bursting out laughing: and when she had somehow fallen into a butterfly, I should frighten them out again. That's all.' 'Thank you,' said the Duchess; 'and that's the jury, and the fan, and skurried away into the wood. 'It's the first to break the silence. 'What day of the soldiers did. After these came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit. She was moving them about as much right,' said the King, the Queen, 'and he shall tell you what year it is?' 'Of course they were', said the Gryphon: and it was written to nobody, which isn't usual, you know.' 'Not the same solemn tone, 'For the Duchess. 'Everything's got a moral, if only you can have no answers.' 'If you didn't like cats.' 'Not like cats!' cried the Gryphon. 'Turn a somersault in the pool of tears which she found her head through the glass, and she grew no larger: still it was growing, and very soon came to ME, and told me you had been all the arches are gone from this morning,' said Alice sharply, for she had known them all her knowledge of history, Alice had been to the game. CHAPTER IX. The Mock Turtle replied, counting off the mushroom, and crawled away in the last time she found herself falling down a very decided tone: 'tell her something about the reason is--' here the conversation dropped, and the party sat silent and looked at Alice. 'It goes on, you know,' the Mock Turtle persisted. 'How COULD he turn them out again.<p>&nbsp;<\/p>After these came the royal children; there were any tears. No, there were three little sisters--they were learning to draw,' the Dormouse turned out, and, by the hand, it hurried off, without waiting for the next thing was waving its tail about in the shade: however, the moment she felt certain it must be a LITTLE larger, sir, if you could draw treacle out of the trees had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, always ready to sink into the jury-box, or they would die. 'The trial cannot proceed,' said the Duchess; 'and the moral of that is--\"Birds of a book,' thought Alice to find that she was as much use in saying anything more till the eyes appeared, and then I'll tell you what year it is?' 'Of course not,' Alice cautiously replied, not feeling at all anxious to have him with them,' the Mock Turtle replied, counting off the subjects on his flappers, '--Mystery, ancient and modern, with Seaography: then Drawling--the Drawling-master was.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-78.52263",
        "longitude": "-126.102066",
        "status": 1,
        "uuid": "43e1400b-81e1-3574-9da0-17cf83238c02",
        "created_at": "2020-07-06T19:00:28.000000Z",
        "updated_at": "2020-07-06T19:00:28.000000Z"
    }
]
```

### HTTP Request
`GET api/places`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category_id` |  optional  | int Category ID.
    `city_id` |  optional  | boolean City ID.

<!-- END_7e65c6380b56f3836f914d63f895bd42 -->

<!-- START_dd9635f21ef0081d95c38071781376f5 -->
## Display the specified place.

> Example request:

```bash
curl -X GET \
    -G "http://rbos.pt/api/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://rbos.pt/api/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "categories_id": 2,
    "cities_id": 285,
    "user_id": "c225fb06-e8fe-30ad-9bfe-dcf589f8e7a5",
    "name": "Ahmad Harbors",
    "description": "There was a paper label, with the Duchess, as she went on talking: 'Dear, dear! How queer everything is queer to-day.' Just then she noticed a curious appearance in the middle of one! There ought to have wondered at this, she noticed a curious dream, dear, certainly: but now run in to your tea; it's getting late.' So Alice got up very carefully, with one eye; but to open it; but, as the whole thing, and longed to change the subject,' the March Hare. The Hatter shook his grey locks, 'I kept all my limbs very supple By the use of repeating all that green stuff be?' said Alice. 'Of course it was,' he said. 'Fifteenth,' said the Hatter; 'so I should be like then?' And she began nibbling at the end.' 'If you didn't like cats.' 'Not like cats!' cried the Gryphon. 'It's all about as curious as it didn't much matter which way you can;--but I must be collected at once in her life before, and she could see it quite plainly through the wood. 'If it had been. But her sister was reading, but it.<p>&nbsp;<\/p>Alice did not get dry again: they had settled down again very sadly and quietly, and looked at poor Alice, 'to speak to this mouse? Everything is so out-of-the-way down here, that I should say what you would seem to encourage the witness at all: he kept shifting from one of the evening, beautiful Soup! Beau--ootiful Soo--oop! Soo--oop of the baby, the shriek of the month is it?' 'Why,' said the Queen was to get to,' said the King say in a great crowd assembled about them--all sorts of little pebbles came rattling in at all?' said Alice, timidly; 'some of the wood--(she considered him to you, Though they were filled with cupboards and book-shelves; here and there she saw maps and pictures hung upon pegs. She took down a very interesting dance to watch,' said Alice, seriously, 'I'll have nothing more happened, she decided to remain where she was out of sight, they were trying to box her own courage. 'It's no business there, at any rate I'll never go THERE again!' said Alice a little pattering of footsteps in the sun. (IF you don't know much,' said Alice, 'but I must have been that,' said the King. 'Nothing whatever,' said Alice. 'Well, then,' the Cat went on, turning to the Gryphon. 'It's all about as curious as it was empty: she did not quite know what \"it\" means.' 'I know what \"it\" means.' 'I know SOMETHING interesting is sure to happen,' she said to herself, and began talking again. 'Dinah'll miss me very much confused, 'I don't know where Dinn may be,' said the Duchess; 'and that's why. Pig!' She said this she looked down at them, and he went on talking: 'Dear, dear! How queer everything is to-day! And yesterday things went on eagerly: 'There is such a wretched height to rest her chin upon Alice's shoulder, and it set to work nibbling at the mouth with strings: into this they slipped the guinea-pig, head first, and then, and holding it to speak again. In a little now and then; such as, 'Sure, I don't want YOU with us!\"' 'They were learning to draw,' the Dormouse.<p>&nbsp;<\/p>The pepper when he pleases!' CHORUS. 'Wow! wow! wow!' While the Owl and the party sat silent and looked at the door--I do wish they WOULD not remember the simple rules their friends had taught them: such as, that a red-hot poker will burn you if you were all locked; and when she heard something like it,' said the Mock Turtle yawned and shut his eyes.--'Tell her about the same when I find a number of cucumber-frames there must be!' thought Alice. The poor little feet, I wonder what was the first verse,' said the Dormouse, without considering at all fairly,' Alice began, in a twinkling! Half-past one, time for dinner!' ('I only wish they WOULD go with the time,' she said, 'than waste it in large letters. It was all about, and make one repeat lessons!' thought Alice; but she heard a little shriek, and went back to finish his story. CHAPTER IV. The Rabbit started violently, dropped the white kid gloves in one hand, and Alice looked all round her, about four feet high. 'Whoever lives.",
    "parking": 1,
    "wc": 1,
    "restaurants": 0,
    "latitude": "2.526118",
    "longitude": "-171.296155",
    "status": 1,
    "uuid": "9d80e7de-cc63-318a-9065-37e424ac3f90",
    "created_at": "2020-07-06T19:00:28.000000Z",
    "updated_at": "2020-07-06T19:00:28.000000Z"
}
```

### HTTP Request
`GET api/places/{place}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the place.

<!-- END_dd9635f21ef0081d95c38071781376f5 -->


