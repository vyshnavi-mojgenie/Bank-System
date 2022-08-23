<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ABC BANK') }}
        </h2>
    </x-slot>
    <form action="{{route('withdraw_post')}}" method ="post">
        @csrf
  <div class="form-group">
    <label for="amount">Enter Amount </label>
    <input type="amount"  name ="amount" value=""  class="form-control"  placeholder="Enter Amount">
  </div>
  
  <button type="submit" class="btn btn-primary">Withdraw</button>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
