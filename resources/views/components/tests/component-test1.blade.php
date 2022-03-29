<x-first.app>
  <x-slot name="header">ヘッダー1</x-slot>

  <p>test1</p>

  <x-first.card title="title" content="content" :message='$message'/>
  <x-first.card title="タイトル2"/>

  <x-first.card title="cssを変更" class="bg-red-300"/>

</x-first.app>
