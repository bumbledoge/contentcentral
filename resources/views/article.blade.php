<x-app-layout>

    <div class="centerThis">
        <div class="centerThis" style="flex-direction: column; width: 1000px; margin:25px;">
            <div class="centerThis font-semibold text-gray-800 leading-tight"style="font-size: 3rem">
                {{ $data->title }}
            </div>
            <div class="centerThis">
                <strong>{{ $data->author }} </strong>&nbsp;in&nbsp;<strong style="color: red">{{ $data->category }}</strong>
            </div>
                </br>
            <div class="centerThis">
                {{ $data->content }}
            </div>
        
        </div>
    </div>

</x-app-layout>