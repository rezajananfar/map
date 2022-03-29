<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo Site_url('assets/css/styles.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <title><?php echo Program_title('پنل مدیریت') ?></title>
</head>

<body class="my-bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 mx-auto my-5">
                <div class="text-center py-2 mb-4">
                    <h3 class="fw-bolder black-font-text">پنل مدیریت
                        <span class="text-primary black-font-text">نقشه آنلاین</span>
                    </h3>
                </div>
                <div class="bg-light rounded shadow-sm my-3 px-2 py-3">
                    <div class="row">
                        <div class="col">
                            <div class="float-end">
                                <a class="bg-primary rounded py-1 px-2 my-pointer-cursor my-primary-bg-hover text-decoration-none mx-2">
                                    <span class="text-light me-1">
                                        <i class="bi bi-house-fill"></i>
                                        صفحه اصلی
                                    </span>
                                </a>
                                <a class="bg-success rounded py-1 px-2 my-pointer-cursor my-success-bg-hover text-decoration-none mx-2">
                                    <span class="text-light">
                                        <i class="bi bi-clipboard-check-fill"></i>
                                        مکان های فعال
                                    </span>
                                </a>
                                <a class="bg-secondary rounded py-1 px-2 my-pointer-cursor my-secondary-bg-hover text-decoration-none mx-2">
                                    <span class="text-light">
                                        <i class="bi bi-clipboard2-minus-fill"></i>
                                        مکان های فعال
                                    </span>
                                </a>
                            </div>
                            <div class="float-start">
                                <a class="bg-danger rounded py-1 px-2 my-pointer-cursor my-danger-bg-hover text-decoration-none mx-2">
                                    <span class="text-light">
                                        <i class="bi bi-door-open-fill"></i>
                                        خروج
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded shadow-sm p-3 my-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">عنوان مکان</th>
                                <th scope="col">تاریخ ثبت</th>
                                <th scope="col">عرض جغرافیایی</th>
                                <th scope="col">طول جغرافیایی</th>
                                <th scope="col">وضعیت نمایش</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>آکادمی زبان معرفت</td>
                                <td>15 مرداد 97</td>
                                <td>35.268</td>
                                <td>78.365</td>
                                <td>
                                    <a class="bg-success rounded py-1 px-2 my-pointer-cursor my-success-bg-hover text-decoration-none mx-1">
                                        <span class="text-light me-1">فعال</span>
                                    </a>
                                    <a class="bg-secondary rounded py-1 px-2 my-pointer-cursor my-secondary-bg-hover text-decoration-none mx-1">
                                        <span class="text-light me-1">غیر فعال</span>
                                    </a>
                                    <a class="bg-primary rounded py-1 px-2 my-pointer-cursor my-primary-bg-hover text-decoration-none mx-1">
                                        <span class="text-light">
                                            <i class="bi bi-eye-fill"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>