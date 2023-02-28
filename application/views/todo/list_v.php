<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <title>CodeIgniter</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link type="text/css" rel='stylesheet' href="/todo/include/css/bootstrap.css" /> -->
</head>

<body>
    <div class="w-full h-full flex justify-center select-none pt-20">
        <div class="w-[33.3%] space-y-2">
            <div class="space-y-1 bg-gray-200 rounded-md shadow-sm border border-b border-gray-200">
                <div class="text-[20px]">테스트 입니다!</div>
                <div>TODO 만들기!</div>
            </div>

            <div class="flex justify-center">
                <div class="px-3 py-2 border border-b border-orange-300 text-orange-500 bg-orange-50 hover:opacity-80">
                    <a href="/CI/index.php/main/lists">메인 화면으로 가기</a>
                </div>
            </div>

            <table class="w-full">
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>내용</th>
                        <th>시작일</th>
                        <th>종료일</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lists as $list) {
                    ?>
                        <tr class="w-full h-full">
                            <th>
                                <?php echo $list->id; ?>
                            </th>
                            <td>
                                <div class="flex w-fit justify-center cursor-pointer bg-green-50 text-green-500 p-1 border border-green-400 border-b rounded-md shadow-md horver:opacity-70">
                                    <a href="./view/<?php echo $list->id; ?>">
                                        <?php echo $list->content; ?>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    <time datetime="<?php echo mdate("%Y-%M-%j", human_to_unix($list->InsDate)); ?>"><?php echo $list->InsDate; ?></time>
                                </div>
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    <time datetime="<?php echo mdate("%Y-%M-%j", human_to_unix($list->ModDate)); ?>"><?php echo $list->ModDate; ?></time>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            <a href="write/" class="px-2 py-1 border border-b border-blue-300 text-blue-400 bg-blue-50 rounded-md shadow-md hover:opacity-80">
                                쓰기
                            </a>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>