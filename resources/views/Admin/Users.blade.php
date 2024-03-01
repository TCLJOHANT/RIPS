<x-app-layout>
    <div>
        <div>
            <x-Container.FormModal></x-Container.FormModal>
          <x-Container.TableBasic :datos="$users"  ></x-Container.TableBasic>
    </div>
 </x-app-layout>