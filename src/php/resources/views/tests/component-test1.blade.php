<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    テスト1

    <x-tests.card title="タイトル" content="本文" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル"></x-tests.card>
    <x-tests.card class="bg-red-300" title="タイトル"></x-tests.card>

</x-tests.app>
