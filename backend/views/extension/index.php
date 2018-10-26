<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 5/31/2018
 * Time: 3:42 PM
 */

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = Yii::t( 'backend', 'Tiện ích mở rộng' );

?>

<style>

    .app-icon {
        text-align: center;
    }

    .app-icon img {
        height: 100px;
    }
</style>

<div class="page-content " style="min-height: 602px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= Url::to( [ 'site/index' ] ) ?>">Bảng điều khiển</a></li>

        <li class="breadcrumb-item active">Tiện ích mở rộng</li>
    </ol>
    <div class="clearfix"></div>
    <div id="plugin-list" class="clearfix app-grid--blank-slate row">
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-analytics">
                <div class="app-icon">
                    <img src="/uploads/cms/img/hotlineIcon.png">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Nút gọi điện</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description">
                        Thêm nút gọi điện để khách hàng liên hệ nhanh với bạn.
                    </div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="analytics" data-status="1">
                            Hủy kích hoạt
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-audit-log">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Audit Log</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Record activities logs">Record activities logs</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="audit-log" data-status="1">
                            Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-backup">
                <div class="app-icon">
                    <img src="data:image/png;base64,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">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Backup</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Backup &amp; restore database, uploads folder">Backup &amp;
                        restore database, uploads folder
                    </div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="backup" data-status="1"> Hủy
                            kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-block">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Block</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Manage static block (HTML, Text) on your theme">Manage static
                        block (HTML, Text) on your theme
                    </div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="block" data-status="1"> Hủy
                            kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-blog">
                <div class="app-icon">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATYAAABkCAYAAAAMjRzhAAAgAElEQVR4nO2deXgUdZ7/39+q6isHHQI5SIAkQpAEIWAgHiCXIKCy8xvRGWHUXWeHWRycmXW8ZVbRGV1wBnd8xl2Zn4OyIyuuIAMCEgQ55JD7kDucScgdEkPSSae7q2r/qCNd6apOd9Ldub6v58ljdXddHal3Pp/v5yLx/3O/CErvQ5T/twuA6BEgunjwTg9IE48+tj5Y9sBbSLUn+xx2qugqXl79IWA2Q+Q4gGPBWSwgJhaE4wBCpB8KpRPhOvsGKJ2AH1GLIha8MW2Rrqh5BA/e2fw5wLIQOQ6EIWA4DsTEAgxLBY3SZWA6+wYoEcaPqIkswav3v4JhiUN0D/1o2yZU3awDMZtaRI2VRI0wsqhRcaN0Aaiw9SZ0RE1w8SBNPADg+fG/xKjkEbqHniq6ig0njkouKMsCAIjJJFlrABU0SpeCCltvwUDURKckagvv+BmmZk7UPbS1CwoAjNksWWnUWqN0QegaW29AR9REtwDRyYPwIh4dPQcP3DbT8PCPtm1ClaMBxGwCZBeUMXEAy0iiRgMGlC4Gtdh6OgaiJjR5QHgRDw69D0/kzjU8XHVBWRaCySS9yTAAy9CAAaXLQi22nkwb7ue4tFw8NWm+4eFNbqfkgprNgNkEIggt1hp1QSldGGqx9VTaELXR/bPxb1OfB4GxKK3akY8qRwNEjoPIMBAZBsRkkqw1gLqglC4LFbaeiJGouQUAwKCYFLw642VwjLHBrrigxGwCOCnyyXrlrKnWGoXSBaHC1tPwJ2q8iEExKfjDg7+HzWQ1PIW3C6qkdrAMo3VBqbVG6cJQYetJtCFqdnMsXpv+MuzWWL+n+WD7Vo0LCsDXBaVQujBU2HoKoggIMBS1aMGMJTNf1y2V8uZU0VV89d0RXxeU5qxRuhFU2HoCiqhBf00tWjDj1ftfQXr8IL+nMXJBCcvSnDVKt4IKW3dHFjVREHVFjbgEPDPNuFTKGz0XVORYWuRO6XbQPLbujJeoQRABXpAqCrxEbeEdP8P4wXf6Pw1EnC66hq/OHIdosQAcC1YWNoYWuVO6IVTYuiutRE2tKHBJeWrEJeCxu+bhgWzjUikFp7tZrQUlDJGCBCINGFC6L1TYuiNGosa3WGpzhj+IedkPBXS6D7ZvRZWzCTCbwHAcIAJgGN+cNSpulG4CXWPrbvgTNV4EcQmYcss9+On4fwzodKeKrkouqLyuJsjaxZikv3k0YEDpjlBh6060YamBFzEuLRfPTFrot1RKQY2CsizAsSAsA0aUAga0yJ3SnaGuaHehLVFzCciKG4KXJj3jt1TKG28XlGUY1QVlacCA0s2hFlt3IABRGxSTgtdmLvJbKuXN/oJzui6okrMmvaAuKKV7QoWtqxOAqNnNsXhz1mttlkopNLmd+ODrzWp1geKC6gYMKJRuCBW2royOqAkuHqJSEyrXfy6Z+ToSouMDOyVE1QUV2ZZ8NYAGDCg9hy6zxpZhScWwuCEYHZeFBGsCkvokItpsU9eLmtxONLgaUVZfhsKmEpytKcDJ2rNoEBp75gNoIGqA/B4vItptwhszFrVZKuXNtwXnWxJxZReU8c5ZowEDSg+AdObA5EQuHlOTxmNS6t1ItSdDRMutBBLVA4Dvys9gT+Uh7Lq+H82cu/s/lN4dOvyIGngRb9z3CsaljAnstBDhdDfjF399D9XuZggmk8YFZUwcYDJRa43SI+gUYUvk4vHkkEdwx8CxAUfw2qLOWY/NV7bh79e2oJlxA2w3fDANRE0pkRJFEaJbAHEJeG7irwynShmxJH8t9p47B5hNgOx2KtaaurbGMlTUKN2eiAvb/KFzMSttqq6gldSV40TxCRTeKEJxfQluOL+H29EEADBF2zDImoSUvikYPmg4bkscobtYXuesx/Iz/429FYdBuG5keQQoauBFPD32n/1OldJjf8E5vPXF/6q1oN45a6zZRBtIUnoUERO2DEsqnrntX3zWg+qc9dhwZhN2nt6JisZKAIBoMwEsATExIIRAlCN0RBA1VktO0ghMSL8LM7Kn+QjlvqID+NPpFd3DegtC1OaOfMjvVCk96pz1mL/iv+AQBFXUAMlaYyxm6oJSehwREbbx8bl4dswCjfjUOevxPwdXY/vZr+FEM0SbCYyNk8TMzAIM0U05UDtZAOraUx8hCo+P+hHuv22GZm2upK4crx37Ayqaqruu9RaEqM3OmI6nJs0PeP1RwccFZRgwvODrggJd83dEoQRJ2IVtRtJE/GLUP2kexh0Xv8F72/9TErQYM9hoE4iZBeEYKQEl0IdLiRx6BPBNHgwkCXhu4q8wLHGIukudsx6vHlqKKw3FXU/cAhE1QQRcAvIG3o7F014KWtT2F5zDW5vXShPcW+Ws0YABpafC2uZkLg7XycfH5+Jfx/xcfRg9ggfLdv0ZnxxaDbeNAYmzgos1S5YaxwBMkA8XIZJlxxIwZhb1TBO2Xt0BOx+NYYlDAQBWzoK7k8ZhX/khNLgaQYIRznAShKiN7p+Nxfe9DJawQV2izlmPRWtXwUWIxgUlAAjHgXCsVGlARY3Swwhbgm6OPQvPjlmgilqT24kXvvgtdp7fCTHGDK6vBVysGcQSgrwpQqQ1OTMDYuXwfsHHWLFvpfqx3RqL129/HlaYIXo6LbulhSBELZBReUb8OX8jmngPCEMkUWMYnygoFTRKTyQswhZDbPjViJ9pkmsXbV6M82Xngb5WcH2tIDYu9Iv6RAo4MFEmrK/ejr8dXa1+lGpPxgujfwHR6ZHywDqLNkQNgEbU2hqVZ8T+gnM4cPWyNLtATu2AIEhlU3QwC6WHE5bKg4XDntCU+Pxx6zuqqLExZhCzca5UDLEhp282suOHIdmSAAtjBgDUu+pR2FCKcw2XcLLmrP+1OJaA2Disub4ZfeP7YXbGfQCAcSljMKlvHr65eVgS1kg/0AGImtJXLdBReXrUOevxp21fSOtqDCPZzErAgGNpV1xKjyfkwpZjz9L02N98Oh/fFh+CaLeA8yNqiVw8fpA+A9MGTjS0UMbL/61y1GDL+a3YWLHDuNqASOL2/8+swkh7lppm8vO7foqj607CwXokNzhSBCNqbExAo/KMUF1QpVOHLGq0Ky6ltxByV/SRwQ+o21WOGqzY8xFEmwlctMlQ1GYkTcSfJ7yJ2Rn3BeR2JUTH44ncufivSUuRYR0oiYOo414SAsIx+I/Tf1HLtezWWNx/63SILj5yLmkQohbtNuGVqc8GVf/pja4LKkOL3Cm9hZBabDn2LM2Yt5WHPoYTzWD7RINY9F2/+UPnqq6igkfw4GTBaZy4cQLNHhcAICYmFncOykNm4i1qQCIhOh7LJizGsuPLsbfskL5wsgRXGoqx8+IetQTpkVE/xJcXtsFhlq2acBLImprYUv8Z6Kg8Pfy6oLTIHXPThmpeX6yrxZHvb3TS3VDCSUiFbWZyS+1iSV25GgElVv1AQWtRa3I7sea7v2P9ofVwohkwcxBZoh67+tQ6DIpJwaM5c1SR4hgOL+QuBLOTxzeOo7riRjiCT65vwJTMe0BAYDNZkTsgB7trDcQwVPgRNaWaQhmZF+ioPH8oLijkAneNC9oDAgathcmbWqcT+RXX/R7/7uxHNa9XHzuAI/u3h+TeKF2LkAlbDLHhjoFj1df5p/MBQEq+5XwfovHxuRpRK6krx2/Xv4qKxkqINhNIdBRYMyNbGfLxgogy/gaWHXsfuwv34aVJz8BmsoKA4OkJ/4KLG15EGWp9xYoQVDbfwKnys6o1NCNrGnbs2A9i5UBMYXjIgxA18GLAo/KM2HrqGA5cvQyYTS1VBDI9pStua2HSo7CmGl8VnMGiI3sicEeUrkrI1tiG9EnX5FrtvbRfstbMvq5PDLFhwYiWKUpVjhr8+vNnUdFYCRJvA9ffJuW4RZlALKxUZmVipG0bB9ZuwTHHGSzZ/R/wCB4AgM1kxfy7/wl8kwcQ4AsDbCnZqb7MTrwV0U4OcPOh+hW0EKSozc6YHvCoPD3qnPVY8c02zQR3xVrznuTeG7ripsX3x/w7J+HwvAWdfSuUTiRkwpaXMFrdvlZTLImUVa4oaMWDKdPUNAYRIv5929tobHYA/aPAxMqRU6McNyUZ18bhmPMcPjm+Rv1oXMoYDDcNhtjs8Q0mEIKTtWfVlxzDITNxKERe1A88tJfWoubm/Yra1LQJeGrS/A5dUnVBleoCpqVsipXXEHtbwCAtvj9eHDmus2+D0kmETNiSLQnq9pnSMwAguZI6V7g7ueUf3M6Le1py3BS3NZCHj0iVBmsq8lHlqFHfvnfoZAhOXtdqa/A0oqSuXH09tG+GJDB6Fl570BM1XvQVNblZ5Oj+2QGPyjNCcUFFltW6oILgle7RMwMGuy6ew683fopfb/wUm84c9/l8YkZmh68xN20oxsb1a9dxc9OGYrA1qsP3QAmekK2xpdvT1O3CG0Vy6yHfhflELl6TyrDvwl7AzIG1ccEXqRMCwgAHKo+o63WjB42GcGQFmGiTb8STJSh1lKn5Ycn2ZAhXeDAeoePR0WBETR6V195SKYUqR43qgraOgvaUgIE/yurrsLrwEgBgdeEl7OqXiOzkVPXzaLOlXed9ceQ4PDwyF2nx/dX3Gl3NOFR4BW8f3GUYSZ2bNhSP5eRh3OBb2rzGrzd+qt47JfSELnhgbvnLdKO+WnIlddZ0BkQnqdsiRBwvPgnRzgKmdloVLMGhqhOqsKXYk0B4EeAFAL5iVd5cpW7H9YkLTS6bP1FjCSBKveQEr1KpYEblGfGXbfk+UVCFnhIwCIbWQrbvWvDC8dmMOZicmeXzfpTZgsmZWchLuwULNqz2icC+OHIcnp00I+jrUcJDyFxR74e01nPTcI0s2drislY7aqU8NyunGzkNlDJHhbpNQJDExRuundU3NajbseZYSQQ7greoeQRjUeOFdo3KM8LIBe1NAYMBsXbV5dv8D/N8LKy/nD4a1Pk+nPKArqh5E2W2YPkP5mrc08HWKDx112TNftUN9SisqQ7q+pTQEbYpVcSgUaTxAe1/AKNZm897giAGrtoG1l2btBY1XjAWtXaMyjPCyAVVitw1k9x7sLU2OTNLV4jOlpdgyZ5tKHI2BnyusXH98OAI7WCcwppqrDiyD1n9kzD39pb8wiizBS/cMRk/2vo5AGBu5ghEeVmLja5mzPz0AxQ5G7Hr4Sc17vHqYwdwoOQa9lWUBnxvlOAJmbA1uZ2q1daX62O4X7mzxRXsa+sDmAO4BVFETlw2yhwVqHTL6xteD2sfq/Z6dY11QLS+UMXaYtTteld929f2c08AAha19ozK070sREMXlBFBi9wBOFzNSLf3BdpI2PXmh0Ozfd6bs+5vkjgWnEKsxaIRvry0lnW0lFi75rhrNdWqqJ4sLdYIGwC6thYBQuaKNrha/jr2i+0PUZB7irXC223kGA45SXL5kL+UC0Jw+eY1LLtrMeZnzkMMEyWtjcnHZMW0ZKSX1JXDiWYwBtZiPNsigt/f/F7aYIP8NQQpauBFvDjzOU1n3/by1anjhi5obwgYBMK4wbfgjft+gM9mzAn4mMx+iZrXZ8tLNBbftisXNJ9HmS2qO3quukLzWXp8fzUampOi/UNWWl8X8D1R2k/IhK2svgyAZFGk9RtsuChf6b6hSbmYfuu90nTzNhpANgiNWFWwFrMz7sOKSe/g0cH/oArcp0VfYOnR99QpVwBAWH0XLN2erm6X15VLQhQMbYmaupskaMQl4Pnxvwx4/qc/vF1Q70RcBSVg0NNdUIXVxw4g8b3fI/G932PsX9/BrovnNJ9PzszCzKSBAZ0rMdbYyzAi094XALC84BSqG1qs/yizBfmPzsfheQs01lqjqxlfF18J+jqU4AmZsBU2lQCQFu8zEzMlYdOx2ABgd8l+dXtK5j0Ybk2XKgDasNq2lu5GSV05bCYr5mU/hPcnLMXDCTNgEUzYe/0Afp7/DD7+7jOIdouuFRZDbEixt0RlL9VeDa7ZZSCiJkKTgLvwjp8FPf9T99LeLqhXIi4An8EsPV3Q9ChyNqprXt7cMygjoOMdruagr1nrdKrbv9nyORq9ztE/JlYTzACA9781ThWhhJbQCJso4mxNgfoyM/EW2M2x8qK8L5tKt6PJLf2jICB4dsq/ItoRWNvu5Rf+pm7brbFq+6KZGfeCiTbBEe0C18eiW/GQ0zdbM3/hQvF5qVRLZ1+97whAI2q8W/AranNHPhT0/E/dS0M0dkHlCgPqgkI3kTYmwFy2S9WVmtfprUTptoQBPsd4p3zkJA5QAwje1lt1Qz12XTyHJ9asxNJThwO6F0rHCU3wQC5X8ggecAwHAoLpaRPxeelX4Cyi1ioiBA2eRnx4bjUWjnoSgNS2+41pi7D4u2Vo8DQad8dlCU5Un8Hh0uMa1y4hOh4LRz2J/5c2C6surcXeisO6kj11wHh1+2zlBWktzhzdtrwbiBrhRUNRm50xHY/ntl20HQjVjlr9KCggVRgoLYmAXiVoSroHAAzu0xf/mHu3zz4HSq4ZHj+0f8u62pbL530in5/NmIPndm/B+KQU/OR2bdeVw0UtLmXrdI/f7dxMAwSdTMiiog1CIw5eP6K23bk3616svfIlRBunWwGQX7QTWbYhqps2LHEI3p+wFKsK1mJr6W45xOf7kBKO4C8XVmFsymifUqRUezJezH0aP64pxopLq3Gi+oxazRBDbBiTPFLdd++FfYCZM1yLUwlG1ORSqbyBt7dr/qcRb21ar5+Iq8ww6KVdcY3SPRQKa6o1AnO2vESz5jVu8C3Y9fCTmLz2I+RXXPf5fHJmFo4YnH/VyUPq9vikFE26x79NeQB3FpzR7N/gasae4qtttlaihIbQjd+TLbGpqZJVFGezo6ymFNcc1/V7pLEE31YeRZp1AAbbpQVeK2dBXtIY3D/wXqQxA2C39EGypT8G21IwPn4sfjh4Js7XXkKFowqxphjc2lc/yhhns2Nq6njcFjsMV+uKUOusg5t4sLN4H2I8NiT3ScIft74Dt42AiTFL4qZHsKImj8pbdO/zMLGmDv9KASkRd8vJo4BJGpcn/fKkazOCCMZskkcQ9vwxes/nBb5WWd1Qj5e+2oBLjpvqe5lRscgdmK7ZLyGmD/5w6BsAwI4rBZiRnok4m//6zmW7t2J5wWn1tZUQ/GRUS/1zlNmCkQMGan5yB6bjhyNG48nsMbhcVqK5L0roCelc0YrGKtwVn4s4m5TXkx6fjo0F+SAm1lc8CAEhBHuvH4DH0YwRyVlgiGSJWDkLMvqlIS9pDCak5GFCSh5uSxiO1NgB6Mfasaf4AM5+fxGz0++DiTU2OpNiEjErbSoyo9NRfLME1xvKsO/6IeSf2ooGphlsrBmM1WCxvR2iNigmBUseeL3DpVIKJXXl+PeN66S5oKxskbUOGHCKtdaGKxrKDiatiZCYBiJs1Q312HD6OBZu24CjddqF+h2lRZicPBCpcjRTYWfBGZQ6m1DncWPrxbMYFhuH9H4JaE11Qz2W7MrHu+e0BfelziYwTU24O924EaZClNmCe9KG4D9PHGxzX0r7Ce0keDmR9nd5L6hvfXJ2HT45/zmYKJN+BJIXITZ7MMDdD4/mzFG73Prj5U2v4ZTrEmYNnaau07V5axCxv+ggPrq8BhU35bwjk9TrTe97KB0/fESNY6TPW5VKKaPyOloq5X2/v/nfj1BQWeETBYUggCFBTnIXQtTCJNiB1iHEXwddIPDE17lpQ3FnajoAKQfty6LLPlUKg61RGJ+UgjtT01FaX4eTlWWGbuRgaxT+9uCPVTe20dWscU31oEXw4SW0wgZIyajZC9S1NhEiFm9fgmPOc8ZtuEURokuA4HAjlrdhYuqdGJ4yHAPtqTBz0vi9m66bKK4uxrFrx3Cy8gyccQCxclg+fmnA05xEiOAFHlsKd2D15fX6gQo9UXMJIIKBqMlTpZY98Fa7p0rp8fnBXfho/x7AbGoZymKQ3kF0uqj4fvnub7F1VbzLpgprqjHuk+Waz8fG9cOXjz2lee+JNSvpelsYCb2wiSJimCi8P2Gpar0oA5MvcqV+xU1x+3inR5oi5ZKsJLikLrnKDATGxkltiTgGOfFaCzFQPIIHn53/AptKt0sCx5J2i9qSma93uFTKmypHDRau/AAOQdDNWRM5FqzZ1CvqQbsDlU//Vt1udDVjya58LC84BUAStcezx2girtUN9che+W7E77M3EXphAwBRxBjmViye9pLqVtY56/F6/pu4aC7z33dNETi5pbZPLpw8A0E5h+gW8ObtL3RostPmK9vw92tb4IQ0EUu5bluiBl7E0pmL231tPfy6oJCCxYyJkyoMOI6KWhegdaF7W1A3NPyENHjgTZm7GrVN3yMvSco3s3IWTBwyAZevX0JZc5VxmgUhcpRPmglKTKz2h2M0xxIGuFpXhJlpU9qVXmHlLBiZkIUZg6ag0d2ISzcuQ/QIEDyirqiJogh4JFH77dRnMS719g79nlqz7uBu7LhwVhYuVhU1Qog8yZ0LPGBAiQjlN6pxT9qQNtfVzpaX4Nkt67DeT24dJTSEx2ID1HWzRwbMwhO5czUfbT6dj5VFn6OZcQdX0mQEL2L+rfN85pMqrNi3Up1P6g8LZ0ZRUxkOVZ4AwzItogZoEnCVUXmhqCrwpqSuHAv+ewUEwoQmYECJKAuGjURW/yRN4Xtl/U1cvFFJc9giTPiEDVDFbVbsBPz8np9q2mBXOWrw4flPsK/qiHGlQRDXiWGisGLSO7qpFg+9/2M4zTxEsywSLNEW6cvbStNJ0cxIs1CVW2pVVfB43twOTZXS/QptuaDtCRhQKL2UsLmiAKRcNZbgYlMhzlz8DjmpOYg2S00ho802TEjJw8SEO+Hh3ahorISLd+u2Ezciw5KKRzIeRG1jLSqaqgGHBzkpI332W3NqPTwxDNg+FjDRJjBWDkyU/F8zI40I5BiIDAATI02tByRh0ymV+um4xzr+u2lFWy6oyLFgzBwNGFAoARBei01Bttyib3J4fNSPcP9tM3TXwwoqL+NI9UkUN5Wi1FEOB9+ERr4JABDF2jAgOgnJ1gQMjk3F7fGj1PSKgsrL+M3eV0HMLJbf87ZP2sXDH/4EzjiAiTFJYqAToPAJFAA+ojY1bQKem/KrkJVKKfhzQRn5VqgLSqEETthag2sgBMTCwhHH4/2Cj/H1pV2Ym/djnx5lwxKH+G3GKELUFZVhiUMwqW8edtcewqpLa/Fi7tPG9xKsqIVwVJ7Rd/pj/pe6okYIAXi+1xa5UyjtJTLCJkNMDAhjwkVPKRbveRupbCJ+MHwWJgwdH1DGvp6oXKspxtfnvsbRspMQTCL2lh3CrPIz+ikYSo5aMKIWolF5Rqw7uBuXKsq8ZoC2iBrx8LQlEYXSDiLjirZGsZqaPRCcPAQXj6zYWzB6UA6GJGQg3Z6OpNj+PkLiETy4Ul2I63UlOF96HoevHUFFY6WUuGtjwUWbQCwcMqIG4k8Tf6cK4cMf/gSNfURwMWZV1EQXD0EJIDBEI2rhLJXyxm8UFNqAAc1Zo1ACJ6IWmwohAAsQGwfWwoHxCChwFePCpUIIZ3kQlwC4PIiyRCOWjUY974DQ7IETcodSuQIBLAHpHyVNnGflhpEswdXG69h5cY+2c60IjaiJbkESNO9gRZhG5enRlgtKPHyv74pLobSXzhE2BUXgWFYqtRIAxiP7i7wAJy/CCYe8MwdGvl3CkpYKBIb4poswwF8LP8Vd6Xlq+gdpJWqit6jplUqFaFSeHiJE/y6oIFIXlELpACGbedBhiGyBWVjpJ8oEJtYMJsak/Yk1g0SZpH1MkoXm88DLveHWfPd39S2BFwIWtWi3CW9M6/ioPCNK6yqw8uA+CIRpGcrijSD4TnKnUCgB03WEzQhlXSmY9SVRBBhgY8UOVDlqpPeUoSttiBp4Ec9M+2VIRuXp4RE8WLJ+naELKvJ8r+6KS6GEgq4vbMHi1SDSKTRj5aGPpde86Ctq6iHaUXlKy6VwsOHwXlyrqwVhiK+oiWJLkTtAc9YolHbSuWtsoca76608+m9X5QEIjAcwM14lUvoJuI/dNS8ko/KMuFZTrLqg6lAWL5QoqLTmRgMGFEp76TnC1lrU5EABADA2OYqqVB0AuqPyQl3/6Y1H8GDZxo1+XVBCAwYUSkjoGcJmIGq6a2qAbqlUqEblGfHJ/m8kF1QnCqq4oIRrFTCgokahtIvuv8bmT9RYP6LmNSovHPWf3lyrKcaaY98aRkGVInefgAGFQmkX3VvY2hI14kfU5FF5L016Jqyi1qYLKko5a6w8e5UGDCiUjtN9ha2DojYoJgWvzng5ZKPyjFBdUJ0oKCAHDFT3lAYMKJRQ0D2FLVBRU/eX23p7idqbs14Lu6gZuaCKqKk5azRgQKGElO4nbMGImkGp1GvTXw5LqZQ3/lxQ6dbkgEHrCgMqahRKh+lewtZRUWNj8Ma0RSGd/2lEIC4oDRhQKOGh+whbB0UNvIhXpj4btlIpbwoqL/t1QZUid5b1EjVqrVEoIaN7CFs7RU0plVJG5YVy/qcRHsGDP2/ZauiCSt+DFrlTKOGk6wtbsKKmborqqLynx/5zWOs/vWnLBaVdcSmU8NO1ha21qLn5tkWtVVXBo6PnhHz+pxEFlZfx2eF9EFlWPwoq36NirVEXlEIJD123pEpP1JTWQwGK2uyM6T7DmsOFR/Dg7U1fQuQ4ySLTcUFbzwalgkahhIeuabGFQNSmpk3AU5PmR+yWP/rmK1Q03DR2QWlXXAolYnQ9YeuIqIV5VJ4Rp4quYsPxo4YuqPR9aMCAQokUXcsV9SdqHKO/bwRH5enhETx4d/smvy6o2pKIdsWlUCJC17HYvEXNIwQsaq1LpV6buSjspVLetOWC0q64FErk6RrC1lrUeMFY1NRjIjcqz4hTRVfxxXfH/bqgtCsuhRJ5Ol/YghW1CI/KM6LJ7WyT6XEAAAC8SURBVMS72zep1QVGLigNGFAokadzhS0EohbuUXlGrNq3IyAXlBa5UyiRp/OELQSiFu5ReUYEEgWlRe4USufROcKmI2q8W/Avaupm5Ebl6aG4oCLHGbugtCsuhdKpRF7YDESN8KJ/UYvwqDwjFBdUr823Au2KS6F0LpEVthCJWrhH5Rnh7YJ64y1qNGBAoXQ+kRO2EIlaJEbl6RGoC0oDBhRK5xMZYeuoqEVwVJ4RH2zfGpALSgMGFErn83+6rdEBbtn9DAAAAABJRU5ErkJggg==">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Blog</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Manage posts, categories, tags">Manage posts, categories, tags
                    </div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="blog" data-status="1"> Hủy
                            kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-captcha">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Captcha</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Captcha for higher security">Captcha for higher security</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="captcha" data-status="1">
                            Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-contact">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Contact Form</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Contact Form">Contact Form</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="contact" data-status="1">
                            Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-custom-field">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Custom Fields</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Custom Fields">Custom Fields</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="custom-field"
                           data-status="1"> Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-gallery">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Gallery</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Gallery for posts, pages...">Gallery for posts, pages...</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="gallery" data-status="1">
                            Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-language">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Language</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Multilingual for Botble CMS">Multilingual for Botble CMS</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="language" data-status="1">
                            Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-log-viewer">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Log Viewer</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Log Viewer">Log Viewer</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="log-viewer" data-status="1">
                            Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-member">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Member</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Manage member, user register/login">Manage member, user
                        register/login
                    </div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="member" data-status="1"> Hủy
                            kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-note">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Note</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Allow to add note when editing page, post...">Allow to add note
                        when editing page, post...
                    </div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="note" data-status="1"> Hủy
                            kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-request-log">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Request Log</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Log error requests">Log error requests</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="request-log"
                           data-status="1"> Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-card-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="app-item app-translation">
                <div class="app-icon">
                </div>
                <div class="app-details">
                    <h4 class="app-name">Translation</h4>
                </div>
                <div class="app-footer">
                    <div class="app-description" title="Manage translation text">Manage translation text</div>
                    <div class="app-author">Tác giả: <a href="http://sangnguyen.info" target="_blank">Sang Nguyen</a>
                    </div>
                    <div class="app-version">Phiên bản: 2.6</div>
                    <div class="app-actions">
                        <a class="btn  btn-warning  btn-trigger-change-status" data-plugin="translation"
                           data-status="1"> Hủy kích hoạt </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-confirm-delete" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="til_img"></i><strong>Confirm Delete</strong></h4>
                </div>

                <div class="modal-body with-padding">
                    <div>Are you sure want to delete this record?</div>
                </div>

                <div class="modal-footer">
                    <button class="pull-left btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button class="pull-right btn btn-danger ">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <div class="modal fade delete-many-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="til_img"></i><strong>Confirm Delete</strong></h4>
                </div>

                <div class="modal-body with-padding">
                    <div>Are you sure want to delete selected record(s)?</div>
                </div>

                <div class="modal-footer">
                    <button class="pull-left btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button class="pull-right btn btn-danger delete-many-entry-button">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <div class="modal fade modal-bulk-change-items" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4>
                </div>

                <div class="modal-body with-padding">
                    <div>
                        <div class="modal-bulk-change-content"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="pull-left btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button class="pull-right btn btn-info confirm-bulk-change-button"
                            data-load-url="https://cms.botble.com/tables/bulk-change/data">Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <div class="page-footer">
        <div class="page-footer-inner">
            <div class="row">
                <div class="col-md-6">
                    Bản quyền 2018 © Botble Technologies. Phiên bản: <span>3.2
</span>
                </div>
                <div class="col-md-6 text-right">
                    Trang tải xong trong 0.38s
                </div>
            </div>
        </div>
    </div>
</div>