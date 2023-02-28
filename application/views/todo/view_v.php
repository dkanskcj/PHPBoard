<!DOCTYPE html>
<html lang="en"><br>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CodeIgniter</title>
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
                    <tr class="flex flex-col">
                        <th> <?php echo $views->id; ?>번 할 일</th>
                        <th> <?php echo $views->InsDate; ?></th>
                        <th> <?php echo $views->ModDate; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <div>
                                <?php echo $views->content; ?>
                            </div>
                        </th>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            <a href="../lists" class="border border-b rounded-md bg-blue-50 text-blue-400 border-blue-500 px-2 py-1">목록</a>
                            <a href="../delete/<?php echo $this->uri->segment(3); ?>" class="border border-b rounded-md bg-red-50 text-red-400 border-red-500 px-2 py-1">삭제</a>
                            <a href="../write" class="border border-b rounded-md bg-green-50 text-green-400 border-green-500 px-2 py-1">쓰기</a>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>