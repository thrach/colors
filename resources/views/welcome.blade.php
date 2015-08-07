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
                <th>Mouline</th>
                <th>Coton</th>
                <th>Rayonne</th>
                <th>Retors</th>
                <th>Laine</th>
                <th>Medicis</th>
                <th>Broder</th>
            </thead>
            <tbody>
                <tr v-repeat="arrColors">
                    <td>@{{ mouline }}</td>
                    <td>@{{ coton }}</td>
                    <td>@{{ rayonne }}</td>
                    <td>@{{ retors }}</td>
                    <td>@{{ laine }}</td>
                    <td>@{{ medicis }}</td>
                    <td>@{{ broder }}</td>
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
