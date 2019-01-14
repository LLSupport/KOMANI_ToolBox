<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcherContainer([
                    new DllPatcher("jubeat", [
                        {
                         name : "关闭教程",
                         patches : [{offset : 0xCFFC7, off: [0x75, 0x4A, 0x57, 0x68, 0x00], on : [0xE9, 0x90, 0x00, 0x00, 0x00]}]
                        },
                        {
                         name : "选曲时间锁定",
                         patches : [{offset : 0xA5A49, off : [0x75], on : [0xEB]}]
                        },
                    ], true),

                    new DllPatcher("music_db", [
                        {
                         name : "全曲解锁",
                         patches : [{offset : 0x1B8F, off: [0x74, 0x09], on : [0x90, 0x90]}]
                        },
                    ], true)
                ]);
            });
        </script>