<div>
    <main>
        <div>
            <input wire:model="link" type="text" placeholder="link">
          <div>
              @error('link')
              <div>
                  <sup>{{$message}}</sup>
              </div>
              @enderror
          </div>
        </div>
        <button wire:click="saveLink">save</button>
    </main>
    @if($token)
        <a href="{{route('link.show',$token)}}">{{route('link.show',$token)}}</a>
    @endif
</div>
