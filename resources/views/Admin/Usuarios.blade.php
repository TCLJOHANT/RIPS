<x-app-layout>
    @php
        $d = [
            
        [
            'name' =>'juan',
            'apellido' => 'caca'

        ],[
            'name' =>'juanaa',
            'apellido' => 'cacaaa'

        ]
];
    @endphp
    @foreach ($d as $key => $f )
        {{$key}}
    @endforeach

    <div>
        <div>
            <x-Container.FormModal></x-Container.FormModal>
          <x-Container.TableBasic :datos="$usuarios"  ></x-Container.TableBasic>
    </div>
 </x-app-layout>
