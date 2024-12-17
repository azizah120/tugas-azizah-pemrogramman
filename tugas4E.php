<?php

// Array asosiatif perusahaan teknologi
$companies = [
    [
        "name" => "Apple Inc.",
        "founded" => "1976",
        "founder" => "Steve Jobs, Steve Wozniak, Ronald Wayne",
        "headquarters" => "Cupertino, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
       ],
    [
        "name" => "Microsoft",
        "founded" => "1975",
        "founder" => "Bill Gates, Paul Allen",
        "headquarters" => "Redmond, Washington, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"
    ],
    [
        "name" => "Google",
        "founded" => "1998",
        "founder" => "Larry Page, Sergey Brin",
        "headquarters" => "Mountain View, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
    ],
    [
        "name" => "Facebook",
        "founded" => "2004",
        "founder" => "Mark Zuckerberg",
        "headquarters" => "Menlo Park, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
    ],
    [
        "name" => "Amazon",
        "founded" => "1994",
        "founder" => "Jeff Bezos",
        "headquarters" => "Seattle, Washington, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
    ],
    [
        "name" => "IBM",
        "founded" => "1911",
        "founder" => "Charles Ranlett Flint",
        "headquarters" => "Armonk, New York, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg"
    ],
    [
        "name" => "Intel",
        "founded" => "1968",
        "founder" => "Gordon Moore, Robert Noyce",
        "headquarters" => "Santa Clara, California, USA",
        "image" => "data:image/png;base64,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"
    ],
    [
        "name" => "Samsung Electronics",
        "founded" => "1969",
        "founder" => "Lee Byung-chul",
        "headquarters" => "Suwon, South Korea",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg"
    ],
    [
        "name" => "Sony",
        "founded" => "1946",
        "founder" => "Masaru Ibuka, Akio Morita",
        "headquarters" => "Tokyo, Japan",
        "image" => "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAe1BMVEX///8AAAD5+fmCgoJ6enrY2NiysrKvr6/x8fGkpKTT09OcnJxWVlb8/PypqamXl5dNTU3l5eXf399tbW1bW1tGRka9vb3r6+sSEhJERETDw8O4uLhjY2M2NjaRkZFqamoaGhp9fX0jIyMxMTGJiYkqKiobGxsiIiI9PT31+ncoAAAHr0lEQVR4nO2b6XLiOhCFMaux2QmbMRBCMpP3f8JrDAipF0mEKe5M1fl+pUBuy8dSbyKNBgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4F9nWvRb5eYjqfjYlK1+MX3G2myZtwe79dla8rV42tzfRCcfJAKTffYTa8Xnt2QtGeSdPz3xl5MdxUe7PWGveRlWzivKImCs2RVlNxxV+YdNEeU2OsEBZ4Zxxuht+2vvw515qxW6/N3zSpUdgsaS95F87V4ePhcHn3T79eqdBiaR28Z26jDXdfTDD1czaqSXP7oeqQrPIzj0pavHyuCJNHihG5/FiOXMYKIOW1mjOu/B56LoYmVfD5gRdrMmVrIb8sGvF0tZVmufhJpYzVIa/XsxGGxEO4d4sZJ1+v+LRZ3EZL/tmGmlneX4TbhcEavgI9tbs+NnI0HKWbRY1HdUyOH2bvchn6Urb+7bcz4+iGFu2qeGZLHYg06ouWHvFx2zdEds5+0KcYEmCY2h+3aNM7tD/dG8Xg2r2lhbjMzVV/OCGnMXxtfl8vlt7azsLwd8od9I87BYbTKdnZhPbemsRT/faIlqKSlLZgacxO+Hn8zSUbb05ruZ/Qpb8vU3ugGxqFa5MKaGJhZyEiG7TCXhMB5RuylzEGs5dbPuyja9vbB22sMZ5j6x3KV3TXRkRmSouF6o9lf2okUzWE0AmVrf0igrDPH525FQeWnicC5WlrishMsNdCtK21/eh1XEkAwe9YndoG9IiMTWaqCu9Iy9I4SvGbe9z+dEZkKDHIGkKwthiCZW8uYb7CktmN8a0xFWgJK2sx17FZfnclLEIjMJrlIS7rZ8hCqWtIHMYN+NWRFGtv/y/o24fE+ea0UyWazUnYW0UlyGZN58hC5W8ps5Z/OuvG+JpZ2OD5/dPx+Il7vFY1noucONkygWebLAJjxDXAhfWsaklFlTj2gyazkPufFB7ViqW+9bzj/objhP7dhfdjze+bKvqWtwbUheheFewkOxEWsqNSJIrDLexi9Wk5qxbmsJqTSE9OJiVx7H3WzKq1feCHJTsIQn2jG3ZlmNEatDqowLhWxMTe4usPrHhERr/WpLpaOKZVi08yK0rcgCDYwW582WhCWWVHO6nsAkeQGxWIZzC4lWVqcniGwXK7yXeaGszgbdUmIo4bjtRrZ1bbHEl2pH/lz6UIRVW/UStVIZTwbFrvWxG8vHDTN3mK8zaEFSdPq1I5Zbw16xch3zsEGxWKVxdgDWyvUuTU+XQ9RLUmLpjok8jyCJKQ3ErliNptBULM1gE1vlasiB1VFDyyP4k82UXhqEpzLkZYXzjxriiKjELfqF0G8y+dwjYjVox2ZxbxuF4nioQcY50XBB0veI+Z4hfoimxEwsIc9Jvq5+1ITjz5g7q0cT4V5Cqh9raJAHIylpzHwbzNOFxRKT+suLM643SixaPhiENj+D+bwH1XqVWOJxQZ3WGLECPbkrUrhIAp0SQ5N3EgM4fomk2FG3ZCkPzWQlsWgoMReaz6O6AUp+GX9QXsyl61WcUjkQ17Q7ulfRxFcUiyeVSV1XPiqWlObG9BHuTLd7/6G7ZprcOfKXEURi6i9kscR4lN9nEJkQCzvaX1XKNDvb8dxzHnfD7mKEKhcZdyn/pl8rYjVSdj5UuXWz4ORjfomjayJmSaazGvb5cJpt+62DJ2W1ix/3m6imQ7BG0sQS82gT0OPFIveP8R3XbM4TM1fZNm8L87P3IfF3MRGYBkNWkuliNaRj3ytCY13DrU1jxLp2P8Lduk5O6g27CiNOK6o4DGWyHrG0k58XiRXlZtyi29k37oy/Yqy5l/Dt4xNL78OVwmCFH4v1EWXeyXKcxyOZVsRBEbmCL22vWLTd+FKxItsqtn0nfNB+bdASyaGFEwK/WGLClUQHF/owj4kVc8bglrJu44dUTMGgRByg0CcLiEUDhK66xhNiRall56wk9SQt18DBIWkgSOVvSKxGKv2yU/yBoMwzYsU4Gts6+Ypm1t59TaKZ6DGDYjWGwu8xXyVWcghdYDtlVt7TGtfT4KV5kljtH2/feqonXp2Fj3cNz4lVKeBtUjh+iZ9e0Gprotx/RusVWQ0jhG/Fs+p/43sAl4gXRqBHcouRdtXS6RFKu4z9TkVaXClLKGWt7v7bu7PoAWy413mDHNXENMKE88tfxy119s2iHWOa9z0+iaWMN4LIiOH35IxTytefTDbCr0fYGwqL1dvU1tj5x3pRf+4zIB321jed73vLLMuK5WhfsrCjNW9X/AhmfezWv+cdrrKR0DLb0O2stny1COu+oXDxEGoL/0AsLx4vovyDhAYvsx4Wy+16vkSsvl6bUkr9ZLpiFd8/TEohBDwullMNhOu258WqqoRmP+p/I96CyWum//o+wtIPxLIPYN9fI1bFdBzSax91ADI7hqVqKf946BHL0xq5x4Pg5J4Sa11xL9ZXXfXgYpFH1Y8Xlt5/DJs/djjwN5MW49L9Ffp3u//4/2dmudjRLPv//v9mMlazrKjIZquoLrFMmnXHx8NgsVhM3uatfJt5gwMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD8Ef4DsGJY3FKWktAAAAAASUVORK5CYII="
    ],
    [
        "name" => "Tencent",
        "founded" => "1998",
        "founder" => "Pony Ma, Zhang Zhidong",
        "headquarters" => "Shenzhen, China",
        "image" => "data:image/png;base64,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"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Teknologi</title>
</head>
<body>
    <h1>Daftar Perusahaan Teknologi</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Tahun Didirikan</th>
            <th>Pendiri</th>
            <th>Kantor Pusat</th>
            <th>Logo</th>
        </tr>
        <?php foreach ($companies as $company) : ?>
            <tr>
                <td><?= $company['name'] ?></td>
                <td><?= $company['founded'] ?></td>
                <td><?= $company['founder'] ?></td>
                <td><?= $company['headquarters'] ?></td>
                <td><img src="<?= $company['image'] ?>" alt="<?= $company['name'] ?> Logo" width="100"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>