# API Spec

## Create Mahasiswa

Request :

-   Method : POST
-   Endpoint : `api/mahasiswa/{nim_mahasiswa}`
-   Header :
    -   Content-Type : application/json
    -   Accept : application/json
-   Body :

```json
{
    "nim": "string, unique",
    "nama": "string (9)",
    "fakultas": "string",
    "prodi": "string"
}
```

Response :

```json
{
    "code": "number",
    "status": "string",
    "data": {
        "nim": "string, unique",
        "nama": "string (9)",
        "fakultas": "string",
        "prodi": "string",
        "created_at": "datetime",
        "updated_at": "datetime"
    }
}
```

## Get Mahasiswa All

Request :

-   Method : GET
-   Endpoint : `api/mahasiswa`
-   Header :
    -   Accept : appliaction/json

Response :

```json
{
    "code": "number",
    "status": "string",
    "data": [
        {
            "nim": "string, unique",
            "nama": "string (9)",
            "fakultas": "string",
            "prodi": "string",
            "created_at": "datetime",
            "updated_at": "datetime"
        },
        {
            "nim": "string, unique",
            "nama": "string (9)",
            "fakultas": "string",
            "prodi": "string",
            "created_at": "datetime",
            "updated_at": "datetime"
        },
        ...
    ]
}
```

## Get Mahasiswa

Request :

-   Method : GET
-   Endpoint : `api/mahasiswa/{nim_mahasiswa}`
-   Header :
    -   Accept : appliaction/json

Response :

```json
{
    "code": "number",
    "status": "string",
    "data": {
        "nim": "string, unique",
        "nama": "string (9)",
        "fakultas": "string",
        "prodi": "string",
        "created_at": "datetime",
        "updated_at": "datetime"
    }
}
```

## Update Mahasiswa

Request :

-   Method : PUT/PATCH
-   Endpoint : `api/mahasiswa{nim_mahasiswa}`
-   Header :
    -   Content-Type : application/json
    -   Accept : application/json
-   Body :

```json
{
    "nama": "string (9)",
    "fakultas": "string",
    "prodi": "string"
}
```

Response :

```json
{
    "code": "number",
    "status": "string",
    "data": {
        "nim": "string, unique",
        "nama": "string (9)",
        "fakultas": "string",
        "prodi": "string",
        "created_at": "datetime",
        "updated_at": "datetime"
    }
}
```

## Delete Mahasiswa

Request :

-   Method : DELETE
-   Endpoint : `api/mahasiswa/{nim_mahasiswa}`
-   Header :
    -   Accept : application/json

Response :

```json
{
    "code": "number",
    "status": "string"
}
```
