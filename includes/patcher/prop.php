<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcherContainer([
                    new DllPatcher("jubeat", [
                        {
                         name : "关闭教程",
                         patches : [{offset : 0x81F79, off: [0x0F, 0x85, 0xC7], on : [0xE9, 0xC6, 0x01]}]
                        },
                        {
                         name : "选曲时间锁定",
                         patches : [{offset : 0x16E64D, off : [0x75], on : [0xEB]}]
                        },
                    ], true),

                    new DllPatcher("music_db", [
                        {
                         name : "全曲解锁",
                         patches : [{offset : 0x266D, off: [0x02], on : [0x1f]}]
                        },
                    ], true)
                ]);
            });
        </script>