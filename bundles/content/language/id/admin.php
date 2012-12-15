<?php

return array(
    'nav' => array(
        'post'      => 'Berita',
        'category'  => 'Kategori',
        'tag'       => 'Tag'
    ),

    'post' => array(
        'title' => array(
            'index'     => 'Pengaturan Berita',
            'insert'    => 'Berita Baru',
            'update'    => 'Perbaharui Berita',
            'delete'    => 'Hapus Berita',
            'confirm'   => 'Anda yakin akan menghapus berita'
        ),
        'field' => array(
            'users_id'  => array(
                'label'         => 'Penulis',
                'placeholder'   => 'Penulis berita',
                'help'          => 'Penulis berita'
            ),
            'title'     => array(
                'label'         => 'Judul berita',
                'placeholder'   => 'Tuliskan judul berita di sini',
                'help'          => 'Nama yang akan muncul di situs anda.',
            ),
            'content'   => array(
                'label'         => 'Isi berita',
                'placeholder'   => 'Tuliskan isi berita di sini',
                'help'          => 'Merupakan isi berita yang muncul di situs anda nantinya'
            ),
            'status'    => array(
                'label'         => 'Status berita',
                'placeholder'   => array('draft'=> 'Konsep','review'=>'Menunggu tinjauan','publish' => 'Terbitkan'),
                'help'          => ''
            ),
            'slug'      => array(
                'label'         => 'Slug',
                'placeholder'   => 'Slug berita',
                'help'          => 'Slug adalah versi URL-ramah nama. Biasanya menggunakan huruf kecil dan mengandung huruf, angka, dan tanda hubung.'
            ),
            'comment' => array(
                'label'         => 'Aktifkan komentar',
                'placeholder'   => array('on' => 'Aktifkan','off'=>'Matikan'),
                'help'          => 'Dengan mengaktifkan komentar, berarti berita yang anda tayangkan dapat di komentari oleh pengunjung'
            ),
            'created' => array(
                'label'         => 'Terbitkan',
                'placeholder'   => 'Sekarang',
                'help'          => 'Waktu berita ini akan di tayangkan'
            ),
            'updated' => array(
                'label'         => 'Di perbaharui',
                'placeholder'   => '',
                'help'          => ''
            )

        ),
        'btn' => array(
            'insert'    => 'Tambahkan Berita',
            'update'    => 'Perbaharui Berita',
            'delete'    => 'Hapus Berita',
            'save'      => 'Simpan Berita'
        )
    ),
    'categories' => array(
        'title' => array(
            'index'     => 'Pengaturan Kategori',
            'insert'    => 'Kategori Baru',
            'update'    => 'Perbaharui Kategori',
            'delete'    => 'Hapus Kategori',
            'confirm'   => 'Anda yakin akan menghapus kategori'
        ),
        'field' => array(
            'name' => array(
                'label'         => 'Nama',
                'placeholder'   => 'Nama Kategori',
                'help'          => 'Nama yang akan muncul di situs anda.',
            ),
            'slug'  => array(
                'label'         => 'Slug',
                'placeholder'   => 'Slug Kategori',
                'help'          => 'Slug adalah versi URL-ramah nama. Biasanya menggunakan huruf kecil dan mengandung huruf, angka, dan tanda hubung.',
            ),
            'parent'  => array(
                'label'         => 'Parent',
                'placeholder'   => 'Parent',
                'help'          => 'Kategori, tidak seperti tag, dapat memiliki hirarki. Anda mungkin memiliki kategori "Jazz", dan di bawah yang memiliki kategori anak-anak untuk Bebop dan Big Band. Opsional.',
            ),
            'description'  => array(
                'label'         => 'Keterangan',
                'placeholder'   => 'Keterangan',
                'help'          => 'Deskripsi tidak ditampilkan secara default, namun, beberapa tema dapat menampilkannya.',
            )
        ),
        'btn' => array(
            'insert' => 'Tambahkan Kategori',
            'update' => 'Perbaharui Kategori',
            'delete' => 'Hapus Kategori'
        )

    )
);