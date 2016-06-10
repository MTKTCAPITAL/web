@extends('template.app')
@section('content')

    <h2>Recent Transactions</h2>
    <p>
    <p>Below is a list of our recent transactions. Please be advised that this list is only comprised of a few selected transactions and does not represent our entire list of loans. If you have questions about our involvement with a certain industry please feel free to contact one of our business consultants.</p><p class="table-responsive">
    </p><table class="table table-striped table table-bordered table-hover">
        <thead>
        <tr>
            <th>Loan amount</th>
            <th>Industry</th>
            <th>City</th>
            <th>State</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>$250,000</td>
            <td>Manufacturing</td><td>Austin</td>
            <td>TX</td>
        </tr><tr>
            <td>$40,000</td>
            <td>Trucking Services</td><td>Atlanta</td>
            <td>GA</td>
        </tr><tr>
            <td>$175,000</td>
            <td>Construction & Masonry </td><td>Phoenix</td>
            <td>AZ</td>
        </tr>
        <tr>
            <td>$28,000</td><td>Wines & Spirits Store</td><td>Brooklyn</td><td>NY</td></tr>
        <tr>
            <td>$40,000</td><td>Restaurant </td><td>St. Louis </td>
            <td>MO</td>
        </tr>
        <tr>
            <td>$65,000</td><td>Automobile Repair</td><td>Austin</td><td>TX</td>
        </tr><tr>
            <td>$20,000</td><td>Dental Office</td><td>Mineola</td><td>NY</td>
        </tr><tr>
            <td>$100,000<br></td><td>Business Services</td><td>Fairfax</td><td>VA</td>
        </tr><tr>
            <td>$75,000</td><td>Gas Station</td><td>Charlotte</td><td>NC</td>
        </tr><tr>
            <td>$35,000</td><td>Cleaning Services</td><td>New Haven</td><td>CT</td>
        </tr>
        </tbody>
    </table>    </p>
@stop