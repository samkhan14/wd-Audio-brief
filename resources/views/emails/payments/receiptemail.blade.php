<!DOCTYPE html>
<html>
<head>
    <title>{!! (!empty($brand_settings['company_name']) ? $brand_settings['company_name'] : '') !!}</title>
</head>
<body>
{!! $data['content'] !!}
</body>
</html>