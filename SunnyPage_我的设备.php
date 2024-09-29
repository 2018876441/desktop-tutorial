<style type="text/css">
                     /* 我的装备 */
                    .equipment-item-content {
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                        margin: 0 -8px;
                    }

                    .equipment-item-content-item {
                        width: calc(30.999% - -2px); 
                        margin: 8px 6px; /* 子元素之间的间距 */  
                        border-radius: 12px;  
                        overflow: hidden;  
                        background: #f1f1f1;  /* 图片背景杨色 */
                        box-shadow: 0 8px 16px -4px rgba(44, 45, 48, 0.1); 
                        min-height: 400px; /* 或根据需要调整 */  
                        position: relative;
                    }

                    @media screen and (max-width: 1200px) {
                        .equipment-item-content-item {
                            width: calc(50% - 12px);
                        }
                    }

                    @media screen and (max-width: 768px) {
                        .equipment-item-content-item {
                            width: 100%;
                        }
                    }

                    .equipment-item-content-item-info {
                        padding: 8px 16px 16px 16px;
                        margin-top: 12px;
                    }

                    .equipment-item-content-item-name {
                        font-size: 18px;
                        font-weight: bold;
                        line-height: 1;
                        margin-bottom: 8px;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        cursor: pointer;
                        width: fit-content;
                    }

                    .equipment-item-content-item-name:hover {
                        color: #425AEF;
                    }

                    .equipment-item-content-item-specification {
                        font-size: 12px;
                        color: rgba(60, 60, 67, 0.8);
                        line-height: 1;
                        margin-bottom: 12px;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .equipment-item-content-item-description {
                        line-height: 20px;
                        color: rgba(60, 60, 67, 0.8);
                        height: 60px;
                        display: -webkit-box;
                        overflow: hidden;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        font-size: 14px;
                    }

                    a.equipment-item-content-item-link {
                        font-size: 12px;
                        background: #9999992b;
                        padding: 4px 8px;
                        border-radius: 8px;
                        cursor: pointer;
                    }

                    a.equipment-item-content-item-link:hover {
                        background: #425AEF;
                        color: #fff;
                    }

                    h2.equipment-item-title {
                        line-height: 1;
                    }

                    .equipment-item-description {
                        line-height: 1;
                        margin: 4px 0 8px 0;
                        color: rgba(60, 60, 67, 0.8);
                    }

                    .equipment-item-content-item-cover {
                        width: 100%;
                        height: 200px;
                        background: #f1f1f1;
                        display: flex;
                        justify-content: center;
                    }

                    img.equipment-item-content-item-image {
                        object-fit: cover;
                        height: 100%;
                    }

                    div#equipment {
                        margin-top: 26px;
                    }

                    .equipment-item-content-item-toolbar {
                        display: flex;
                        justify-content: space-between;
                        position: absolute;
                        bottom: 12px;
                        left: 0;
                        width: 100%;
                        padding: 0 16px;
                    }

                    a.bber-reply {
                        cursor: pointer;
                    }
</style>
<div class="equipment-item-content">

<div class="equipment-item-content-item">
    <div class="equipment-item-content-item-cover">
        <img class="equipment-item-content-item-image" alt="小米"
            src="https://q.ttimg.cn/pic/2024/04/199fc58e68889c74.jpg">
    </div>
    <div class="equipment-item-content-item-info">
        <div class="equipment-item-content-item-name">
            小米12S Pro
        </div>
        <div class="equipment-item-content-item-specification">
        </div>
        <div class="equipment-item-content-item-description">
            小米12S Pro是一款搭载骁龙8+ Gen1处理器、6.73英寸2K AMOLED E5曲面屏（120Hz）、50MP徕卡三摄、120W有线快充+50W无线快充的高性能旗舰手机，具备优异影像系统与强大续航能力。
        </div>
        <div class="equipment-item-content-item-toolbar">
            <div class="equipment-item-content-item-toolbar">
                <input class="button-primary button-small" type="button" value="已停售" >
            </div>                    
        </div>
    </div>
</div>


<div class="equipment-item-content-item">
    <div class="equipment-item-content-item-cover">
        <img class="equipment-item-content-item-image" alt="dell"
            src="https://q.ttimg.cn/pic/2024/04/7865dac6a5a95978.jpg">
    </div>
    <div class="equipment-item-content-item-info">
        <div class="equipment-item-content-item-name">
            戴尔G15 5511
        </div>
        <div class="equipment-item-content-item-specification">
        </div>
        <div class="equipment-item-content-item-description">
            配备第11代酷睿i7-11800H处理器、RTX 3060显卡、16GB内存、512GB SSD、165Hz电竞屏、双风扇散热、AWCC智控中心的15.6英寸游戏笔记本，主打性能与耐用设计。
        </div>
        <div class="equipment-item-content-item-toolbar">
            <div class="equipment-item-content-item-toolbar">
                <input class="button-primary button-small" type="button" value="已停售" >
            </div>                    
        </div>
    </div>
</div> 

<div class="equipment-item-content-item">
    <div class="equipment-item-content-item-cover">
        <img class="equipment-item-content-item-image" alt="hp"
            src="https://q.ttimg.cn/pic/2024/04/48d73e3424f7ed56.jpg">
    </div>
    <div class="equipment-item-content-item-info">
        <div class="equipment-item-content-item-name">
            惠普400G1DM
        </div>
        <div class="equipment-item-content-item-specification">
        </div>
        <div class="equipment-item-content-item-description">
            这是一款小巧台式机，适合作为家用小服务器，搭载低功耗i5 4590t处理器，具备扩展内存/硬盘、多接口、无线网卡，支持PCIe扩展卡，预装Win7/8，节能高效。
        </div>
        <div class="equipment-item-content-item-toolbar">
            <div class="equipment-item-content-item-toolbar">
                <input class="button-primary button-small" type="button" value="已停售" >
            </div>                    
        </div>
    </div>
</div> 

<div class="equipment-item-content-item">
    <div class="equipment-item-content-item-cover">
        <img class="equipment-item-content-item-image" alt="game"
            src="https://q.ttimg.cn/pic/2024/04/6e91feed5f3e3038.jpg">
    </div>
    <div class="equipment-item-content-item-info">
        <div class="equipment-item-content-item-name">
            飞智冰原狼
        </div>
        <div class="equipment-item-content-item-specification">
        </div>
        <div class="equipment-item-content-item-description">
            飞智冰原狼一代手柄是一款无线多模游戏控制器，支持有线、蓝牙、2.4G连接，具备背键宏设定、霍尔线性扳机、体感功能，兼容PC/Switch/手机平台，以其高性价比、精确操控与良好兼容性备受玩家青睐。
        </div>
        <div class="equipment-item-content-item-toolbar">
            <div class="equipment-item-content-item-toolbar">
                <input class="button-primary button-small" type="button" value="已停售" >
            </div>                    
        </div>
    </div>
</div> 

<div class="equipment-item-content-item">
    <div class="equipment-item-content-item-cover">
        <img class="equipment-item-content-item-image" alt="game"
            src="https://pixl.decathlon.com.cn/p2564595/k$38004ed25ccf4872cc150ce9ce7a1b43/content.webp">
    </div>
    <div class="equipment-item-content-item-info">
        <div class="equipment-item-content-item-name">
            迪卡侬 Riverside 500
        </div>
        <div class="equipment-item-content-item-specification">
        </div>
        <div class="equipment-item-content-item-description">
            旅行自行车Riverside 500设计用于在多种道路和小径上进行短距离到中距离的骑行。Riverside 500采用铝制车架，轻盈坚固
        </div>
        <div class="equipment-item-content-item-toolbar">
            <div class="equipment-item-content-item-toolbar">
                <input class="button-primary button-small" type="button" value="详情" onclick="window.location.href='https://www.decathlon.com.cn/product-detail?dsm_code=145696&model_code=965304&category_id=null&product_name=%E6%97%85%E8%A1%8C%E8%87%AA%E8%A1%8C%E8%BD%A6Riverside%20500&listFilter=%7B%22selectFilter%22%3A%7B%22sale_price%22%3A%5B2.9,12999.9%5D%7D,%22expandData%22%3A%5B%5D,%22category_id%22%3Anull%7D'">
            </div>                    
        </div>
    </div>
</div> 
</div>