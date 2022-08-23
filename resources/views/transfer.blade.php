<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ABC BANK') }}
        </h2>
    </x-slot>
    <form action="{{route('transfer_post')}}" method ="post">
        @csrf
    <div class="form-group">
    <label for="email">Enter Email :</label>
    <input type="email" name ="email" value ="" class="form-control" id="email" placeholder="Enter email">
    </div>
  
    <div class="form-group">
    <label for="amount">Enter Amount :</label>
    <input type="amount" name ="amount" value ="" class="form-control"  placeholder="Enter Amount">
    </div>
  
  <button type="submit" class="btn btn-primary">Transfer</button>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
