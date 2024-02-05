<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @foreach ($settings as $setting) --}}
    <form action="{{ route('setting.update', $setting) }}">
        <input type="text" name="ceo_name" value="{{ $setting->ceo_name }}"><br>
        <input type="text" name="trainer_name" value="{{ $setting->trainer_name }}"><br>
        <input type="text" name="trainer_agency" value="{{ $setting->trainer_agency }}"><br>
        <input type="text" name="place" value="{{ $setting->place }}"><br>
        <input type="date" name="date" value="{{ $setting->date }}"><br>
        {{ $setting->ceo_signature }} <br>
        <input type="file" name="ceo_signature"><br>
        {{ $setting->trainer_signature }} <br>
        <input type="file" name="trainer_signature"><br>
        <button type="submit">Save</button>
    </form>
    {{-- @endforeach --}}
</body>

</html>
