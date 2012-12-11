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

            //

        ),
        'btn' => array(
            'insert' => 'Tambahkan Berita',
            'update' => 'Perbaharui Berita',
            'delete' => 'Hapus Berita'
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
                'label' => 'Nama',
                'placeholder' => 'Nama Kategori',
                'help'  => 'Nama yang akan muncul di situs anda.',
            ),
            'slug'  => array(
                'label' => 'Slug',
                'placeholder' => 'Slug Kategori',
                'help'  => 'Slug adalah versi URL-ramah nama. Biasanya menggunakan huruf kecil dan mengandung huruf, angka, dan tanda hubung.',
            ),
            'parent'  => array(
                'label' => 'Parent',
                'placeholder' => 'Parent',
                'help'  => 'Kategori, tidak seperti tag, dapat memiliki hirarki. Anda mungkin memiliki kategori "Jazz", dan di bawah yang memiliki kategori anak-anak untuk Bebop dan Big Band. Opsional.',
            ),
            'description'  => array(
                'label' => 'Keterangan',
                'placeholder' => 'Keterangan',
                'help'  => 'Deskripsi tidak ditampilkan secara default, namun, beberapa tema dapat menampilkannya.',
            )
        ),
        'btn' => array(
            'insert' => 'Tambahkan Kategori',
            'update' => 'Perbaharui Kategori',
            'delete' => 'Hapus Kategori'
        )

    )
);