<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ABC BANK') }}
        </h2>
    </x-slot>
    <form action="{{route('deposit_post')}}" method ="post">
        @csrf
  <div class="form-group">
    <label for="amount">Enter Amount</label>
    <input type="amount" class="form-control" name ="amount" value ="" placeholder="Enter Amount">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Deposit</button>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
