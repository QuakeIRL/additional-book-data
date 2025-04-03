## Additioal Book Data

### API with 3 API endpoints
- **/author**
    - full_name, website, note
- **/author/works**
    - array[books]
- **/book**
    - title, pages (string), publisher (string), published (date), format enum{paperback, hardcover}
        - 'title' => 'Dungeon Crawler Carl',
        - 'pages' => '464',
        - 'publisher' => 'Penguin Publishing Group',
        - 'published' => '2024-08-07',
        - 'format' => 'hardcover',
