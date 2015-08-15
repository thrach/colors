<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" id="token" content="{{ csrf_token() }}" />
        <title>Colors</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <body>
        <input class="form-control" name="search" v-model="search" v-on="keyup:getColorByMouline | key 'enter'" />
        <br />
        <table class="table table-responsive">
            <thead>
                <th>DMC 117</th>
                <th>DMC 89</th>
                <th>DMC 486</th>
                <th>Qty Skeins</th>
                <th>DMC 115 No 5</th>
                <th>Qty Skeins</th>
            </thead>
            <tbody>
                <tr v-repeat="arrColors">
                    <td>@{{ mouline }}</td>
                    <td>@{{ retors }}</td>
                    <td>@{{ laine }}</td>
                    <td>&nbsp;</td>
                    <td>@{{ coton }}</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/vue.js') }}"></script>
        <script src="{{ asset('js/vue-resource.min.js') }}"></script>
        <script src="{{ asset('js/colors.js') }}"></script>
    </body>
</html>
