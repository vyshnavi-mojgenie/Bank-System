<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ABC BANK') }}
        </h2>
    </x-slot>
    <div class="container">
  <h2>Statements</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Date/Time</th>
        <th>Amount</th>
        <th>Type</th>
        <th>Details</th>
        <th>Balance</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  
  </div>
</x-app-layout>
